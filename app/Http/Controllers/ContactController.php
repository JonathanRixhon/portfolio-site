<?php

namespace App\Http\Controllers;

use App\Http\PageTemplate;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, PageTemplate $template,)
    {
        $template->load('home');

        return view('pages.home', [
            'page' => $template,
        ]);
    }
}
