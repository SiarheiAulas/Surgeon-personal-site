<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use \App\Http\Requests\MailRequest;
use App\Mail\Feedback;

class MailController extends Controller
{
    public function send(MailRequest $request){
        
    $valid=$request->validated();
    
    Mail::to('avlassergey@list.ru','Me')->send(new Feedback($request));
      
    return back()->with('message', __('messages.sent'));
    }
}
