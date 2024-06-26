<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Traits\UploadFile;

class Clientcontroller extends Controller
{
    use UploadFile;
    //private $columns = ['clientName','phone','email','website'];
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
        //return dd($request->all());

        $messages = $this->errMsg();

        $data = $request->validate([
            'clientName' => 'required|max:100|min:3',
            'phone' =>'required|min:11',
            'email' =>'required|email:rfc',
            'website'=>'required',
            'city'=>'required|max:50',
            //'username' => 'required|string|max:255|unique:users',
            //'image'=>'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], $messages);

        //$imgExt = $request ->image->getClientOriginalExtension();
        //$fileName = time() . '.' . $imgExt;
        //$path = 'assets/images';
        //$request->image->move($path, $fileName);
        $fileName = $this->upload($request->image, 'assets/images');
        
        //$data['image'] = $fileName;
        //$user = User::create([
        //    'username' => $validatedData['username'],
        //]);
        //return redirect()->route('users');

        $data['active'] = isset($request ->active);
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
        $messages = $this->errMsg();

        $data = $request->validate([
            'clientName' => 'required|max:100|min:8',
            'phone' =>'required|min:11',
            'email' =>'required|email:rfc',
            'website'=>'required',
            'city'=>'required|max:50',
            //'image'=>'required',
            'image' =>'sometimes|image',
        ], $messages);
        
        if ($request->hasFile('image')) {
            $fileName = $this->upload($request->image, 'assets/images');
            //$imgExt = $request ->image->getClientOriginalExtension();
            //$fileName = time() . '.' . $imgExt;
            //$path = 'assets/images';
            //$request->image->move($path, $fileName);
            $data['image'] = $fileName;
            // storage - unlink
        }

        $data['active'] = isset($request ->active);
        Client::where ('id', $id)->update($data);
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

    //error custom messages
    public function errMsg(){
        return [
        'clientName.required' =>'The client name is missed , please insert' ,
        'clientName.min' =>'length less then 5 , please insert more chars' ,
        ];
    }



}
