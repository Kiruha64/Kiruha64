<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactinfo;
use App\Contactinfocity;

class ContactInfoController extends Controller
{
    public function Contactinfo(){
        $contactinfocities = Contactinfocity::all();

        $contactinfos = Contactinfo::all();


        return view('template.create.contactinfo.contact_info' ,compact('contactinfos' ) ,compact('contactinfocities' ));
    }

    public function create(){
        return view('template.create.contactinfo.contact_info_create');
    }

    public function create_city(){
        return view('template.create.contactinfo.contact_info_city_create');
    }

    public function storeDevice(Request $request){

        $contactinfocities = new Contactinfo();

        $contactinfocities->text = request('text');
        $contactinfocities->is_visible = request('is_visible');
        $contactinfocities->position = request('position');

        $contactinfocities->save();

        return redirect()->route('contactinfo');

    }

    public function storeDevice_city(Request $request){

        $contactinfocities = new Contactinfocity();

        $contactinfocities->text = request('text');
        $contactinfocities->is_visible = request('is_visible');
        $contactinfocities->position = request('position');

        $contactinfocities->save();

        return redirect()->route('contactinfo');

    }

    public function updateContactinfo($id){

        $contactinfos = new Contactinfo;

        return view('template.create.contactinfo.contact_info_update',['data' => $contactinfos->find($id)]);

    }

    public function updateContactinfo_city($id){

        $contactinfo_city = new Contactinfocity;

        return view('template.create.contactinfo.contact_info_city_update',['data' => $contactinfo_city->find($id)]);

    }

    public function showOneContactinfo($id){
        $contactinfos = new Contactinfo();

        return view('template.create.contactinfo.one_contact_info', ['data' => $contactinfos->find($id)]);
    }

    public function showOneContactinfo_city($id){

        $contactinfo_city = new Contactinfocity();

        return view('template.create.contactinfo.one_contact_city_info', ['data' => $contactinfo_city->find($id)]);
    }

    public function postupdateContactinfo($id,Request $request){

        $contactinfos =  Contactinfo::find($id);

        $contactinfos->text = request('text');
        $contactinfos->is_visible = request('is_visible');
        $contactinfos->position = request('position');



        $contactinfos->save();

        return redirect()->route('contactinfo');
    }

    public function postupdateContactinfo_city($id,Request $request){

        $contactinfo_city =  Contactinfocity::find($id);

        $contactinfo_city->text = request('text');
        $contactinfo_city->is_visible = request('is_visible');
        $contactinfo_city->position = request('position');



        $contactinfo_city->save();

        return redirect()->route('contactinfo');
    }

    public function deleteContactinfo($id){

        Contactinfo::find($id)->delete();

        return redirect()->route('contactinfo');
    }

    public function deleteContactinfo_city($id){

        Contactinfocity::find($id)->delete();

        return redirect()->route('contactinfo');
    }
}
