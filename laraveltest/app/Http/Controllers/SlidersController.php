<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;
use App\Sliderpagetitle;

use App\Aboututpagetitle;
use App\Activitypagetitle;
use App\Detailpagetitle;
use App\Stattablepagetitle;
use App\Infohoverpagetitle;
use App\Contactspagetitle;


class SlidersController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.table',compact(['sliders']),
            [
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);
    }

    public function create()
    {
        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.sliders.create_slider',compact(['sliders']),
            [
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);
    }

    public function createpagetitle()
    {
        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.sliders.create_sliderpagetitle',compact(['sliders']),
            [
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);
    }

    public function storeDevice(Request $request){
        $slider = new Slider();

        $path = $request->file('img')->store('uploads','public');
        $slider->img =$path;


        $slider->title = request('title');
        $slider->description = request('description');
        $slider->link_title = request('link_title');
        $slider->link = request('link');
        $slider->is_visible = request('is_visible');
        $slider->position = request('position');

        $slider->save();

        return redirect()->route('all-sliders', ['path' => $path]);

    }

    public function storeDevicepagetitle(Request $request){
        $slider = new Sliderpagetitle();


        $slider->title = request('title');
        $slider->is_visible = request('is_visible');
        $slider->position = request('position');

        $slider->save();

        return redirect()->route('all-sliders');

    }



    public function showOneSlider($id){
        $slider = new Slider();

        return view('template.create.sliders.one-sliders', ['data' => $slider->find($id)], compact(['sliders','sliderpagetitles','aboutuspagetitles']));
    }

    public function updateSlider($id){
        $slider = new Slider;

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.sliders.update_sliders',compact(['sliders']),
            [
                'data' => $slider->find($id),
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);
    }

    public function updateSliderpagetitle($id){
        $slider = new Sliderpagetitle;

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.sliders.update_sliderpagetitle',compact(['sliders']),
            [
                'data' => $slider->find($id),
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);

    }

    public function postupdateSliderpagetitle($id,Request $request){

        $slider =  Sliderpagetitle::find($id);

        $slider->title = request('title');
        $slider->is_visible = request('is_visible');
        $slider->position = request('position');



        $slider->save();
        return redirect()->route('all-sliders');


    }


    public function postupdateSlider($id,Request $request){

        $slider =  Slider::find($id);

        if(!empty($request->img)){
            if (file_exists($_SERVER['DOCUMENT_ROOT'].'/storage/'.$slider->img)){
                unlink($_SERVER['DOCUMENT_ROOT'].'/storage/'.$slider->img);
            }
            $path = $request->file('img')->store('uploads','public');
            $slider->img =$path;
        }


        $slider->title = request('title');
        $slider->description = request('description');
        $slider->link_title = request('link_title');
        $slider->link = request('link');
        $slider->is_visible = request('is_visible');
        $slider->position = request('position');






        $slider->save();
        return redirect()->route('all-sliders');


    }
    public function deleteSlider($id){

        Slider::find($id)->delete();


        return redirect()->route('all-sliders');
    }


    public function deleteSliderpagetitle($id){

        Sliderpagetitle::find($id)->delete();


        return redirect()->route('all-sliders');
    }

}

