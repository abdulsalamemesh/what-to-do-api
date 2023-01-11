<?php

namespace App\Http\Controllers\API\V1;

use App\Enums\CategoriesEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateThroughAPIRequest;
use App\Models\Language;
use App\Models\Task;
use App\Rules\KeysIn;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function task(Request $request)
    {
        $undefinedQueries = array_values(array_diff($request->query->keys(), ['identifier', 'task', 'category', 'person', 'cost', 'links', 'language']));

        if ($undefinedQueries) {
            $message = 'The following query strings have a typo or are not allowed: ';
            foreach ($undefinedQueries as $key => $str) {
                $message .= $str;
                $message .= $key == (count($undefinedQueries) - 1) ? '.' : ', ';
            }
            return response([
                'error' => $message
            ], 422);
        }

        if ($request->query->has('language') && !in_array($request->query->get('language'), ['en-US', 'de', 'es', 'fr', 'it', 'tr', 'uk'])) {
            return response([
                'error' => 'the selected language is unsupported'
            ], 422);
        }
        $query = \App\Models\Task::query()->inRandomOrder()->where(function ($builder) use ($request) {
            if ($request->query->has('identifier')) {
                $builder->where('identifier', $request->query->get('identifier'));
            }
            if ($request->query->has('category')) {
                $builder->where('category', $request->query->get('category'));
            }
            if ($request->query->has('person')) {
                $builder->where('person', $request->query->get('person'));
            }
            if ($request->query->has('cost')) {
                $builder->where('cost', $request->query->get('cost'));
            }
        });

        $data = $query->first(['identifier', 'task', 'category', 'person', 'cost', 'links']);

        if (!$data) {
            return response([
                'error' => 'No task found with the specified parameters'
            ], 404);
        }
        $data = $data->toArray();
        if ($request->query->has('language')) {
            $data['task'] = $data['task'][$request->query->get('language')];
            $data['links'] = $data['links'][$request->query->get('language')];
        }

        return response($data, 200)
            ->header('Content-Type', 'application/json');
    }


    public function create(Request $request)
    {
        $data = $request->validate([
            'language' => ['required', Rule::in(Language::KEYS)],
            'task'     => ['required', 'string', 'min:5'],
            'category' => ['required', Rule::in(CategoriesEnum::values())],
            'person'   => ['required', Rule::in(range(1, 10))],
            'cost'     => ['required', Rule::in(['free', '$', '$$', '$$$'])],
            'links'    => ['sometimes', 'array', new KeysIn(Language::KEYS)],
            'links.*'  => ['sometimes', 'url'],
        ]);


        $translations = [];
        $translator = new \DeepL\Translator(env('DEEPL_API_KEY'));
        foreach (Language::KEYS as $supportedLanguage) {
            if ($supportedLanguage == Arr::get($data, 'language')) {
                $translations[$supportedLanguage] = Arr::get($data, 'task');
                continue;
            }
            $translations[$supportedLanguage] = $translator->translateText(Arr::get($data, 'task'), Arr::get($data, 'language') == 'en-US' ? 'en' : Arr::get($data, 'language'), $supportedLanguage, in_array($supportedLanguage, ['de', 'es', 'fr', 'it']) ? ['formality' => 'less'] : [])->text;
        }
        $resources = [];

        foreach (Language::KEYS as $supportedLanguage) {
            $keys = array_keys(Arr::get($data, 'links'));
            if (in_array($supportedLanguage, $keys)) {
                $resources[$supportedLanguage] = Arr::get($data, 'links.' . $supportedLanguage);
                continue;
            }
            $resources[$supportedLanguage] = "";
        }
        $task = Task::query()->create([
            'task'     => $translations,
            'category' => Arr::get($data, 'category'),
            'person'   => Arr::get($data, 'person'),
            'cost'     => Arr::get($data, 'cost'),
            'links'    => $resources,
        ]);

        return $task->only(['identifier', 'task', 'category', 'person', 'cost', 'links']);

    }


}
