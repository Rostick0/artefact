<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendFeedbackRequest;
use Illuminate\Http\Request;

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
    }
}
