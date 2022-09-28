<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.Contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Phone'     => 'required' ,
            'Telephone' => 'required' ,
            'Fax'       => 'required' ,
            'Email'     => 'required' ,
            'Website'   => 'required'  ,
            'ARLocation'=> 'required' ,
            'ENLocation'=> 'required' ,

        ]);

        Contact::create([
            'Phone'     =>$request->Phone,
            'Telephone' =>$request->Telephone,
            'Fax'       =>$request->Fax,
            'Email'     =>$request->Email,
            'Website'   =>$request->Website,
            'ARLocation'=>$request->ARLocation,
            'ENLocation'=>$request->ENLocation,

        ]);

        return redirect()->route('admin.contact.index');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin.Contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Phone'     => 'required' ,
            'Telephone' => 'required' ,
            'Fax'       => 'required' ,
            'Email'     => 'required' ,
            'Website'   => 'required'  ,
            'ARLocation'=> 'required' ,
            'ENLocation'=> 'required' ,

        ]);

        $contact = Contact::find($id);
        $contact = $contact->update([

            'Phone'     =>$request->Phone,
            'Telephone' =>$request->Telephone,
            'Fax'       =>$request->Fax,
            'Email'     =>$request->Email,
            'Website'   =>$request->Website,
            'ARLocation'=>$request->ARLocation,
            'ENLocation'=>$request->ENLocation,
        ]);

        return redirect()->route('admin.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();
        return redirect()->back();
    }
}
