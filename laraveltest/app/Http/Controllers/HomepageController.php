<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Footer;
use App\Footermenu;
use App\Infohover;
use App\Menu;
use App\Secondslider;

use App\Contact;
use App\Pricingtable;



use App\files;
use App\file_type;

use App\Page;
use App\Block;

class HomepageController extends Controller
{
    public function homepage(){
        $menus = new Menu();

//        $statisticks = new Statistick();
        $contacts = new Contact();
        $footermenus =new Footermenu();
        $infohovers =new Infohover();

        $file_type = new file_type;
        $files = new files;

        $secondsliders = new Secondslider;
        $pricingtables = new Pricingtable;
        $footers = new Footer;

        $pages = new Page();
        $blocks = new Block();







        return view('homepage.index', ['menus' => $menus->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
            'contacts' => $contacts->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
            'footermenus' => $footermenus->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
            'secondsliders' => $secondsliders->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
            'infohovers' => $infohovers->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
            'pricingtables' => $pricingtables->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
            'footers' => $footers->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
            'file_type' => $file_type->get(),
            'files' => $files->get(),



        ]);
    }
    public  function  copy(){
        return view('homepage.copy');
    }
}
