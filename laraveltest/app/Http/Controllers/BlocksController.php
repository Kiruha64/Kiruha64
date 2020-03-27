<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Block;
use App\Page;

class BlocksController extends Controller
{
    public function index(){
        $blocks = Block::all();

        return view('template.create.blocks.block',compact(['blocks']));
    }

    public function create(){
        $pages = Page::all();

        return view('template.create.blocks.create_block',compact(['pages']));
    }




    public function storeDevice(Request $request){

        $blocks = new Block();

        $path = $request->file('img')->store('uploads','public');
        $blocks->img =$path;

        $blocks->page_id = request('page_id');
        $blocks->title = request('title');
        $blocks->description = request('description');
        $blocks->short_description = request('short_description');
        $blocks->link_title = request('link_title');
        $blocks->link = request('link');
        $blocks->link_title = request('link_title');
        $blocks->position = request('position');
        $blocks->is_visible = request('is_visible');



        $blocks->save();

        return redirect()->route('blocks', ['path' => $path]);

    }

    public function updateBlock($id){
        $blocks = new Block;
        $pages = Page::all();


        return view('template.create.blocks.update_block',['data' => $blocks->find($id)],compact(['pages']));

    }


//    public function showOneBlock($id){
//        $about = new Block();
//        return view('template.create.Pricingtable.one_pricingtable', ['data' => $about->find($id)],compact(['aboutuses','sliderpagetitles','aboutuspagetitles']));
//    }

    public function postupdateBlock($id,Request $request){

        $blocks =  Block::find($id);

        if(!empty($request->img)){
            if (file_exists($_SERVER['DOCUMENT_ROOT'].'/storage/'.$blocks->img)){
                unlink($_SERVER['DOCUMENT_ROOT'].'/storage/'.$blocks->img);
            }
            $path = $request->file('img')->store('uploads','public');
            $blocks->img =$path;
        }

        $blocks->page_id = request('page_id');
        $blocks->title = request('title');
        $blocks->description = request('description');
        $blocks->short_description = request('short_description');
        $blocks->link_title = request('link_title');
        $blocks->link = request('link');
        $blocks->link_title = request('link_title');
        $blocks->position = request('position');
        $blocks->is_visible = request('is_visible');


        $blocks->save();
        return redirect()->route('blocks');


    }

    public function deleteBlock($id){

        Block::find($id)->delete();

        return redirect()->route('blocks');
    }


}
