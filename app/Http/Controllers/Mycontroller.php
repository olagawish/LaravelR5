<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Client;
use App\Mail\ContactClient;

class Mycontroller extends Controller
{
   public function my_data(){
       return view('test');
    }

    public function submit(Request $request)
    {
    $firstname = $request->input('firstname');
    $lastname = $request->input('lastname');

    if (!$firstname || !$lastname) {
        return redirect()->route('form1')->with('error', 'All fields are required.');
    }

    return view('result', compact('firstname', 'lastname'));
    }

    public function generalMail(){
        $data = Client::findOrFail(1)->toArray();
        $data['theMessage'] = 'message data is here';
        Mail::to($data['email'])->send( 
            new DemoMail($data)
        );
        return "mail sent!";
    }

/*sessions
*/
    public function val(){
        session()->put('test', 'First session');  //for many
        return 'session created';
    }

    public function fval(){
        session()->flash('test1', 'First session1');  //for onetime
        return 'session created';
    }

    public function restval(){
        return 'my session is: ' . session('test1') ;
    }

    public function delval(){
        session()->forget('test');  //for one
        return 'my session is removed';
    }


    public function sendClientMail(){
        $data = Client::findOrFail(1)->toArray();
        $data['theMessage'] = 'My message';
        Mail::to($data['email'])->send( 
            new ContactClient($data)
        );
        return "mail sent!";
    }


        // public function delaval(){
    //     session()->flush();  //for all
    //     return 'All sessions is removed';
    // }


}