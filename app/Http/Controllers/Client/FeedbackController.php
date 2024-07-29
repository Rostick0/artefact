<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\SendFeedbackRequest;
use App\Mail\RequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    public function create()
    {
        $navigations = [
            [
                'link' => '/',
                'name' => 'Home',
            ],
            [
                'is_active' => true,
                'name' => 'Request form',
            ],
        ];

        return view('pages.client.feedback', [
            'navigations' => $navigations
        ]);
    }

    public function send(SendFeedbackRequest $request)
    {
        $filepath = null;

        if ($request->hasFile('file')) {
            $filepath = 'upload/mail/' . random_int(1000, 9999) . time() . '.' . $request->file('file')->extension();

            $request->file('file')->storeAs('public/' . $filepath);
        }

        Mail::to('rostik057@gmail.com')->send(new RequestMail($request->validated(), Storage::path('public/' . $filepath)));

        // return back();
        // dd($request->all());

        return back()->with([
            'message' => 'Thank you for your application!'
        ]);
    }
}
