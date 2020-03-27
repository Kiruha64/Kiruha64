<?php

namespace App\Http\Controllers;


use App\file_type;
use App\files;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $file_type = file_type::all();
        $files = files::all();



        return view('template.create.porfolio.table',compact(['files','file_type']));
    }

    public function create()
    {


        return view('template.create.porfolio.create_portfolio');
    }


    public function createPortfoliofile()
    {
        $file_type = file_type::all();
        $files = files::all();



        return view('template.create.porfolio.create_portfolio_file',compact(['files','file_type']));
    }


    public function storeDevice(Request $request){
        $slider = new file_type();


        $slider->alias = request('alias');
        $slider->name = request('name');
        $slider->is_active = request('is_active');
//        $slider->position = request('position');

        $slider->save();

        return redirect()->route('all-portfolio');

    }

    public function storeDevicePortfoliofile(Request $request){
        $slider = new files();

        $path = $request->file('path')->store('uploads','public');
        $slider->path =$path;

        $slider->type_id = request('type_id');
        $slider->name = request('name');
        $slider->description = request('description');
//        $slider->is_visible = request('is_visible');
//        $slider->position = request('position');

        $slider->save();

        return redirect()->route('all-portfolio');

    }


    public function showOnePortfolio($id){
        $slider = new file_type();

        return view('template.create.porfolio.one-sliders', ['data' => $slider->find($id)], compact(['sliders','sliderpagetitles','aboutuspagetitles']));
    }

    public function updatePortfolio($id){
        $slider = new file_type;



        return view('template.create.porfolio.update_portfolio',compact(['sliders']));
    }

    public function updatePortfoliofile($id){

        $slider = new files;
        $file_type = file_type::all();



        return view('template.create.porfolio.update_portfolio_file',compact(['file_type']));
    }

    public function postupdatePortfolio($id,Request $request){
        $slider =  file_type::find($id);



        $slider->alias = request('alias');
        $slider->name = request('name');
        $slider->is_active = request('is_active');




        $slider->save();
        return redirect()->route('all-portfolio');


    }

    public function postupdatePortfoliofile($id,Request $request)
    {

        $slider = files::find($id);

        if (!empty($request->img)) {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/storage/' . $slider->img)) {
                unlink($_SERVER['DOCUMENT_ROOT'] . '/storage/' . $slider->img);
            }
            $path = $request->file('img')->store('uploads', 'public');
            $slider->img = $path;
        }

        $slider->type_id = request('type_id');
        $slider->name = request('name');
        $slider->description = request('description');
//        $slider->is_visible = request('is_visible');
//        $slider->position = request('position');

        $slider->save();

        return redirect()->route('all-portfolio');


    }

    public function deletePortfolio($id){

        file_type::find($id)->delete();


        return redirect()->route('all-portfolio');
    }

    public function deletePortfoliofile($id){

        files::find($id)->delete();


        return redirect()->route('all-portfolio');
    }
}
