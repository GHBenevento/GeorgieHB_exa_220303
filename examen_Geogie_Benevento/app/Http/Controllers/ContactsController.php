<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactsController extends Controller
{
   

    public function save(Request $request){
        
        $request->validate([
            'nombre'=>'required',
            'tel'=>'required|min:9',
            'num_libros'=>'required'
        ]);

        $contact = new contact;
        $contact->nombre = $request->nombre;
        $contact->tel = $request->tel;
        $contact->num_libros = $request->num_libros;
        $contact->save();

        return redirect()->route('/contacts')->with('success', 'Contact created');

    }

    public function index(){
        $contacts = contact::all();
        return view('contacts.index', ['contacts' => $contacts]);
    }
   

}