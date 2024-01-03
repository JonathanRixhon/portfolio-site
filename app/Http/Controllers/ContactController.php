<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\PageTemplate;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, PageTemplate $template,)
    {
        $template->load('contact');

        return view('pages.contact', [
            'page' => $template,
            'contact' => Page::where('route', 'contact')->firstOrFail(),
        ]);
    }
}
