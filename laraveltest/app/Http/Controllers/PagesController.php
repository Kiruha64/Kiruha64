<?php

namespace App\Http\Controllers;

use App\Block;
use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $pages = Page::all();

        return view('template.create.pages.page',compact(['pages']));
    }

    public function create(){
        $page = Page::all();

        return view('template.create.pages.create_page',compact(['pages']));
    }




    public function storeDevice(Request $request){

        $page = new Page();


        $page->title = request('title');
        $page->alias = request('alias');
        $page->position = request('position');
        $page->is_visible = request('is_visible');



        $page->save();

        return redirect()->route('pages');

    }

    public function updatePage($id){
        $pages = new Page;

        return view('template.create.pages.update_page',['data' => $pages->find($id)]);

    }


//    public function showOneBlock($id){
//        $about = new Block();
//        return view('template.create.Pricingtable.one_pricingtable', ['data' => $about->find($id)],compact(['aboutuses','sliderpagetitles','aboutuspagetitles']));
//    }

    public function postupdatePage($id,Request $request){

        $page =  Page::find($id);

        $page->title = request('title');
        $page->alias = request('alias');
        $page->position = request('position');
        $page->is_visible = request('is_visible');


        $page->save();
        return redirect()->route('pages');


    }

    public function deletePage($id){

        Page::find($id)->delete();

        return redirect()->route('pages');
    }
}
