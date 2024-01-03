<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Validator;

class ContactSendController extends Controller
{

    protected array $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ];

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validated = $request->validate($this->rules);

        $this->sendMail($request);

        if (request()->ajax()) {
            return response()->json([
                'title' => 'Email sent',
                'message' => 'Thanks for your message! I will get back to you soon!',
                'flash' => view('components.flash', [
                    'title' => 'Email sent',
                    'slot' => 'Thanks for your message! I will get back to you soon!'
                ])->render()
            ]);
        }

        return redirect()->route('home')->with('flash', [
            'title' => 'Email sent',
            'message' => 'Thanks for your message! I will get back to you soon!'
        ]);
    }

    public function ajaxResponse(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->passes()) {
            $this->sendMail($request);
            return response()->json([
                'title' => 'Email sent!',
                'message' => 'Thanks for your message! I will get back to you soon!'
            ]);
        }

        return response()->json($validator->errors());
    }

    protected function sendMail(Request $request): void
    {
        Mail::send(new ContactMail(
            name: $request->input('name'),
            email: $request->input('email'),
            message: $request->input('message'),
        ));
    }
}
