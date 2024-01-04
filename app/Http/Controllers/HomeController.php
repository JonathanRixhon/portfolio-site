<?php

namespace App\Http\Controllers;

use App\Http\PageTemplate;
use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, PageTemplate $template,)
    {
        $template->load('home');

        return view('pages.home', [
            'page' => $template,
            'contact' => Page::where('route', 'contact')->firstOrFail()
        ]);
    }
}
