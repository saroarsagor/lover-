<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'contacts' => Contact::latest()->get(),
        ];
        return view('admin.contact.index', $data);
    }
    public function create()
    {
        $data = [
            'model' => new Contact()
          
        ];

        return view('admin.contact.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        $category = new Contact();
        $category->fill($request->all());
        $category->save();
        Toastr::success('Contact Created Successfully!.', '', ["closeButton" => "true", "progressBar" => "true"]);
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
      
        return view('admin.contact.edit', compact('contact'));
    }
    public function update(Request $request, Contact $contact)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);
        $contact->fill($request->all());
        $contact->save();
        Toastr::success('Contact Updated Successfully!.', '', ["closeButton" => "true", "progressBar" => "true"]);
        return redirect()->route('contacts.index');
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        Toastr::success('Contact Deleted Successfully!.', '', ["closeButton" => "true", "progressBar" => "true"]);
        return redirect()->route('contacts.index');
    }
}
