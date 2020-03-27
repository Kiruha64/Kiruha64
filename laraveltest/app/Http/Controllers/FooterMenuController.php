<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footermenu;




class FooterMenuController extends Controller
{
    public function Footer_menu(){

        $footermenus = Footermenu::all();




        return view('template.create.footer_menu.footer_menu',compact(['footermenus']));
    }

    public function create_Footer_menu(){



        return view('template.create.footer_menu.footer_menu_create',compact(['footermenus']));
    }

    public function storeDevice_Footer_menu(Request $request){

        $footermenu = new Footermenu();

        $footermenu->link_title = request('link_title');
        $footermenu->link = request('link');
        $footermenu->is_visible = request('is_visible');
        $footermenu->position = request('position');

        $footermenu->save();

        return redirect()->route('footer_menu');

    }


    public function updateFooter_menu($id){




        $footermenu = new Footermenu;

        return view('template.create.footer_menu.footer_menu_update',compact(['footermenus']));

    }


    public function showOneFooter_menu($id){
        $footermenu = new Footermenu();

        return view('template.create.footer_menu.one_footer_menu', ['data' => $footermenu->find($id)]);
    }

    public function postupdateFooter_menu($id,Request $request){

        $footermenu =  Footermenu::find($id);

        $footermenu->link_title = request('link_title');
        $footermenu->link = request('link');
        $footermenu->is_visible = request('is_visible');
        $footermenu->position = request('position');



        $footermenu->save();

        return redirect()->route('footer_menu');
    }


    public function deleteFooter_menu($id){

        Footermenu::find($id)->delete();

        return redirect()->route('footer_menu');
    }
}
