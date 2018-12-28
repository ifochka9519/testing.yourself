<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public static function send(User $user)
    {

        $data = ['name'=>$user->getName()];
        Mail::send(['text'=>'mails/client'],$data, function ($message) use ($user) {
            $message->to($user->getEmail(), $user->getName())->subject('Welcome');
            $message->from('yuliya.plishkina@gmail.com', 'Testing Yourself');
        } );
    }
}
