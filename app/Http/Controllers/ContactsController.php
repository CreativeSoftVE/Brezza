<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Contact;

class ContactsController extends Controller
{
    public function index(Request $request){
        $contacts = Contact::first();
        return view('admin.lcontacts.index')->with('contacts',$contacts);
    }
    
    public function show(){
        
    }
    
    public function edit(){
        $contact = Contact::find(1);
        return view('admin.lcontacts.edit')->with('contact', $contact);
    }
    
    public function update(Request $request, $id){
        $contact = Contact::find($id);
        $contact->fill($request->all());
        $contact->save();
        Flash::warning('Se ha actualizado exitosamente la sección de contacto.');
        return redirect('admin/contacts');
    }
}