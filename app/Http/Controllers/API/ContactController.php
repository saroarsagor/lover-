<?php

namespace App\Http\Controllers\API;

use App\Models\Contact;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Resources\ContactResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\BaseController as BaseController;

class ContactController extends BaseController
{
    public function index()
    {
        $contact = Contact::all();
        return $this->sendResponse(ContactResource::collection($contact), 'Contact retrieved successfully.');
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $Contact = Contact::create($input);
   
        return $this->sendResponse(new ContactResource($Contact), 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
  
        if (is_null($contact)) {
            return $this->sendError('Contact not found.');
        }
   
        return $this->sendResponse(new ContactResource($contact), 'Contact retrieved successfully.');
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
        return $this->sendResponse(new ContactResource($contact), 'Contact deleted successfully.');

    }
}
