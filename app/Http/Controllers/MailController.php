<?php

namespace App\Http\Controllers;


use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;



class MailController extends Controller
{
    public function sendEmail(Request $request){
        
        $data = Client::findOrFail(1)->toArray();
        $data['theMessage'] = 'my message';
        // dd($data);
        Mail::to($data['email'])->send(
            new SendMail($data)
    );
    return "mail sent";



    // $email = "sara@gmail.com";
        // $data = [
        //     'title' => 'laravel send email',
        //     'url' => 'http://sara.com'
        // ];
    }
}
