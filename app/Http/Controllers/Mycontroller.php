<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
//{
 //   public function my_data(){
 //       return view('test');
  //  }
//}


public function submit(Request $request)
    {
    $firstname = $request->input('firstname');
    $lastname = $request->input('lastname');

    if (!$firstname || !$lastname) {
        return redirect()->route('form1')->with('error', 'All fields are required.');
    }

    return view('result', compact('firstname', 'lastname'));
    }

}