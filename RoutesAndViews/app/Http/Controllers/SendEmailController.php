<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('quote');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
	'number' => 'required',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
   'number'   =>   $request->number,
  'email'  =>    $request->email,
            'message'   =>   $request->message
        );

     Mail::to('umunoz@ymail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}

?>