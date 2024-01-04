<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\PageTemplate;
use App\Models\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, PageTemplate $template)
    {
        $template->load('works');

        return view('pages.works', [
            'page' => $template,
            'works' => Work::with('technologies')->paginate(10),
            'contact' => Page::where('route', 'contact')->firstOrFail()
        ]);
    }
}
