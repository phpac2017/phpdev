<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    //
	public function testmail(){
		return view('testmail');
	}
	
	public function send(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('emails.default', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('me@gmail.com', 'Govindaraj Kannan');

            $message->to('govindarajk@sensiple.com');

        });

        return response()->json(['message' => 'Request completed']);
    }
}
