<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class ContactsController extends Controller
{
    public function Contacts(){
        $contacts = Contact::all();



        return view('template.create.contacts.contacts',compact(['contacts']));

    }

    public function create(){



        return view('template.create.contacts.contacts_create',compact(['contacts']));

    }



    public function storeDevice(Request $request){

        $activities = new Contact;

        $activities->text = request('text');
        $activities->is_visible = request('is_visible');
        $activities->position = request('position');

        $activities->save();

        return redirect()->route('contacts');

    }



    public function updateContacts($id){

        $activities = new Contact;



        return view('template.create.contacts.contacts_update',compact(['contacts']));

    }


    public function showOneContacts($id){
        $activities = new Contact();
        return view('template.create.contacts.one_contacts', ['data' => $activities->find($id)]);
    }

    public function postupdateContacts($id,Request $request){

        $activities =  Contact::find($id);

        $activities->text = request('text');
        $activities->is_visible = request('is_visible');
        $activities->position = request('position');



        $activities->save();
        return redirect()->route('contacts');


    }


    public function deleteContacts($id){

        Contact::find($id)->delete();

        return redirect()->route('contacts');
    }

}
