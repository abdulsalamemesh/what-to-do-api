<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function __invoke(Request $request)
    {
        $undefinedQueries = array_values(array_diff($request->query->keys(), ['identifier', 'task', 'category', 'person', 'cost', 'link']));

        if ($undefinedQueries) {
            $string = 'The following query strings are not allowed: ';

            foreach ($undefinedQueries as $key => $str) {
                $string .= $str;
                $string .= $key == (count($undefinedQueries) - 1) ? '.' : ', ';
            }
            return response([
                'error' => $string
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

        $data = $query->first(['identifier', 'task', 'category', 'person', 'cost', 'link']);

        if (!$data) {
            return response([
                'error' => 'No task found with the specified parameters'
            ], 404);
        }

        return response($data,200);
    }
}