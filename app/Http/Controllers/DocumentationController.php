<?php

namespace App\Http\Controllers;

use App\Enums\CategoriesEnum;
use App\Models\Task;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        $supportedCategories = CategoriesEnum::values();

        return view('documentation', compact('supportedCategories'));
    }
}
