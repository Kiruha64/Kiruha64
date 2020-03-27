<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Secondslider;



class SecondSliderController extends Controller
{
    public function Secondslider(){
        $secondsliders = Secondslider::all();



        return view('template.create.secondslider.secondslider',compact(['secondsliders']));
    }

    public function create(){



        return view('template.create.secondslider.secondslider_create',compact(['secondsliders']));
    }

    public function storeDevice(Request $request){

        $secondslider = new Secondslider();

        $path = $request->file('img')->store('uploads','public');
        $secondslider->img =$path;


        $bg = $request->file('background')->store('uploads','public');
        $secondslider->background=$bg;

        $secondslider->title = request('title');
        $secondslider->link_title = request('link_title');
        $secondslider->link = request('link');
        $secondslider->text = request('text');
        $secondslider->is_visible = request('is_visible');
        $secondslider->position = request('position');

        $secondslider->save();

        return redirect()->route('secondslider', ['path' => $path]);

    }

    public function updateSecondslider($id){

        $secondslider = new Secondslider;



        return view('template.create.secondslider.secondslider_update',compact(['secondsliders']));

    }

    public function showOneSecondslider($id){
        $secondslider = new Secondslider();
        return view('template.create.secondslider.one_secondslider', ['data' => $secondslider->find($id)]);
    }

    public function postupdateSecondslider($id,Request $request){

        $secondslider =  Secondslider::find($id);

        if(!empty($request->img)){
            if (file_exists($_SERVER['DOCUMENT_ROOT'].'/storage/'.$secondslider->img)){
                unlink($_SERVER['DOCUMENT_ROOT'].'/storage/'.$secondslider->img);
            }
            $path = $request->file('img')->store('uploads','public');
            $secondslider->img =$path;
        }

        if(!empty($request->background)){
            if (file_exists($_SERVER['DOCUMENT_ROOT'].'/storage/'.$secondslider->background)){
                unlink($_SERVER['DOCUMENT_ROOT'].'/storage/'.$secondslider->background);
            }
            $bg = $request->file('background')->store('uploads','public');
            $secondslider->background =$bg;
        }

        $secondslider->title = request('title');
        $secondslider->link_title = request('link_title');
        $secondslider->link = request('link');
        $secondslider->text = request('text');
        $secondslider->is_visible = request('is_visible');
        $secondslider->position = request('position');


        $secondslider->save();
        return redirect()->route('secondslider');


    }
    public function deleteSecondslider($id){

        Secondslider::find($id)->delete();

        return redirect()->route('secondslider');
    }
}
