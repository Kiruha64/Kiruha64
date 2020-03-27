<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;




class FooterController extends Controller
{
    public function Footer(){
        $footers = Footer::all();





        return view('template.create.footer.footer' ,compact(['footers']));
    }

    public function create(){


        return view('template.create.footer.footer_create',compact(['aboutuses']));

    }




    public function storeDevice(Request $request){

        $about = new Footer();

        $about->text = request('text');
        $about->is_visible = request('is_visible');
        $about->position = request('position');

        $about->save();

        return redirect()->route('footer');

    }

    public function updateFooter($id){
        $about = new Footer;



        return view('template.create.footer.footer_update',compact(['aboutuses']));

    }


    public function showOneFooter($id){
        $about = new Footer();

        return view('template.create.footer.one_footer', ['data' => $about->find($id)],compact(['aboutuses','sliderpagetitles','aboutuspagetitles']));
    }

    public function postupdateFooter($id,Request $request){

        $about =  Footer::find($id);


        $about->text = request('text');
        $about->is_visible = request('is_visible');
        $about->position = request('position');



        $about->save();
        return redirect()->route('footer');


    }



    public function deleteFooter($id){

        Footer::find($id)->delete();

        return redirect()->route('footer');
    }


}
