<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmailReminder($id = null)
    {
        $user = User::findOrFile($id);

        Mail::send('auth.send_mail', ['email' => base64_encode($user->email)], function ($m) use ($user) {
            $m->from('code.naufalfadhil@gmail.com', 'Laravel 5.2');

            $m->to($user->email, $user->name)->subject('Your reminder!');
        });
    }
}
