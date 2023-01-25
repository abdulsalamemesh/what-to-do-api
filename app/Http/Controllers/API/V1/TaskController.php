<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CreateTaskRequest;
use App\Models\Language;
use App\Models\Task;
use App\Service\TranslatorService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * return a random task and bind the query parameters if provided.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function task(Request $request)
    {
        $undefinedQueries = array_values(array_diff($request->query->keys(), ['identifier', 'task', 'category', 'person', 'cost', 'links', 'language']));

        if ($undefinedQueries) {
            return response([
                'error' => $this->getUndefinedQueriesMessage($undefinedQueries)
            ], 422);
        }

        if ($request->query->has('language') && !in_array($request->get('language'), ['en-US', 'de', 'es', 'fr', 'it', 'tr', 'uk'])) {
            return response([
                'error' => 'the selected language is unsupported'
            ], 422);
        }

        $data = \App\Models\Task::query()
            ->inRandomOrder()
            ->where(function ($builder) use ($request) {
                foreach (['identifier', 'category', 'person', 'cost'] as $queryString) {
                    if ($request->query->has($queryString)) {
                        $builder->where($queryString, $request->query->get($queryString));
                    }
                }
            })
            ->first(['identifier', 'task', 'category', 'person', 'cost', 'links']);


        if (!$data) {
            return response([
                'error' => 'No task found with the specified parameters'
            ], 404);
        }

        $data = $data->toArray();
        if ($request->query->has('language')) {
            $data['task'] = $data['task'][$request->get('language')];
            $data['links'] = $data['links'][$request->get('language')];
        }

        return response($data, 200)->header('Content-Type', 'application/json');
    }

    /**
     * get the error message for the undefined parameters.
     *
     * @param array $undefinedQueries
     * @return string
     */
    private function getUndefinedQueriesMessage(array $undefinedQueries): string
    {
        $message = 'The following query strings have a typo or are not allowed: ';
        foreach ($undefinedQueries as $key => $str) {
            $message .= $str;
            $message .= $key == (count($undefinedQueries) - 1) ? '.' : ', ';
        }
        return $message;
    }

    /**
     * create a task and return it.
     *
     * @param CreateTaskRequest $request
     * @return array
     */
    public function create(CreateTaskRequest $request): array
    {
        $translations = TranslatorService::translate($request->get('task'), $request->get('language'));

        $resources = [];

        foreach (Language::KEYS as $supportedLanguage) {
            in_array($supportedLanguage, array_keys($request->get('links'))) ?
                $resources[$supportedLanguage] = $request->get('links.' . $supportedLanguage) :
                $resources[$supportedLanguage] = "";
        }

        return Task::query()->create([
            'task'     => $translations,
            'category' => $request->get('category'),
            'person'   => $request->get('person'),
            'cost'     => $request->get('cost'),
            'links'    => $resources,
        ])->only(['identifier', 'task', 'category', 'person', 'cost', 'links']);
    }
}
