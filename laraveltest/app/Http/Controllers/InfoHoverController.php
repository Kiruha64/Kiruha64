<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infohover;



class InfoHoverController extends Controller
{
    public function Infohover(){
        $infohovers = Infohover::all();


        return view('template.create.info_hover.info_hover' ,compact(['infohovers']));
    }

    public function create(){



        return view('template.create.info_hover.info_hover_create',compact(['infohovers']));
    }



    public function storeDevice(Request $request){

        $infohovers = new Infohover();

        $path = $request->file('img')->store('uploads','public');
        $infohovers->img =$path;


        $infohovers->title = request('title');
        $infohovers->text = request('text');
        $infohovers->facebook_link = request('facebook_link');
        $infohovers->twitter_link = request('twitter_link');
        $infohovers->instagram_link = request('instagram_link');
        $infohovers->is_visible = request('is_visible');
        $infohovers->position = request('position');

        $infohovers->save();

        return redirect()->route('infohover', ['path' => $path]);

    }



    public function updateInfohover($id){

        $infohovers = new Infohover;




        return view('template.create.info_hover.info_hover_update',compact(['infohovers']));

    }





    public function showOneInfohover($id){
        $infohovers = new Infohover();
        return view('template.create.info_hover.one_info_hover', ['data' => $infohovers->find($id)]);
    }

    public function postupdateInfohover($id,Request $request){

        $infohovers =  Infohover::find($id);

        if(!empty($request->img)){
            if (file_exists($_SERVER['DOCUMENT_ROOT'].'/storage/'.$infohovers->img)){
                unlink($_SERVER['DOCUMENT_ROOT'].'/storage/'.$infohovers->img);
            }
            $path = $request->file('img')->store('uploads','public');
            $infohovers->img =$path;
        }


        $infohovers->title = request('title');
        $infohovers->text = request('text');
        $infohovers->facebook_link = request('facebook_link');
        $infohovers->twitter_link = request('twitter_link');
        $infohovers->instagram_link = request('instagram_link');
        $infohovers->is_visible = request('is_visible');
        $infohovers->position = request('position');


        $infohovers->save();
        return redirect()->route('infohover');


    }

    public function deleteInfohover($id){

        Infohover::find($id)->delete();

        return redirect()->route('infohover');
    }

}
