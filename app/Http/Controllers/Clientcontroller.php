<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use DB;

class Clientcontroller extends Controller
{
    private $columns = ['clientName','phone','email','website'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
  
    public function create()
    {
        return view('addClient');
    }  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'clientName' => 'required|max:100|min:5',
            'phone' =>'required|min:11',
            'email' =>'required|email:rfc',
            'website'=>'required',
        ]);
        Client::create($data);
        return redirect('clients');
    
        // $client = new Client();
        // $client ->clientName = $request->clientName; 
        // $client ->phone = $request->phone;
        // $client ->email = $request->email;
        // $client ->website = $request->website;
        // $client ->save();
        // return 'inserted successfully';
    }  
           

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('showClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) 
    {
        $client = Client::findOrFail($id);
        return view('editClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Client::where('id', $id)->update($request->only($this->columns));
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Client::where('id', $id)->delete();
        return redirect('clients');
    }

     /**
     * Trash.
     */
    public function trash()
    {
        $trashed = Client::onlyTrashed()->get();
        return view('trashClient', compact('trashed'));
    }

        /**
     * Restore.
     */
    public function restore(string $id)
    {
        Client::where('id', $id)->restore();
        return redirect('clients');
    }

    /**
     * Force Delete.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Client::where('id', $id)->forceDelete();
        return redirect('trashClient');
    }



}
