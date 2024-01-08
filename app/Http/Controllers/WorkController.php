<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Work;
use App\Http\PageTemplate;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(PageTemplate $template, Work $work)
    {
        $template->title($work->title)
            ->property('description', $work->intro)
            ->property('og:description', $work->intro)
            ->property('twitter:description', $work->intro);

        if ($work->published_at->gt(now())) abort(404);

        return view('pages.work', [
            'page' => $template,
            'work' => $work->load('technologies'),
            'contact' => Page::where('route', 'contact')->firstOrFail(),
        ]);
    }
}
