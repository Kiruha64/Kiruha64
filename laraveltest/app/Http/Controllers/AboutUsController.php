<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Aboutus;


use App\Sliderpagetitle;
use App\Aboututpagetitle;
use App\Activitypagetitle;
use App\Detailpagetitle;
use App\Stattablepagetitle;
use App\Infohoverpagetitle;
use App\Contactspagetitle;




class AboutUsController extends Controller
{
    public function About_us(){
        $aboutuses = Aboutus::all();

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;



        return view('template.create.about_us.about_us' ,compact(['aboutuses']),
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

    public function create(){
        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.about_us.about_us_create',compact(['aboutuses']),
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

    public function createpagetitle(){
        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.about_us.create_about_us_pagetitle',compact(['aboutuses']),
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

        $about = new Aboutus();

        $about->text = request('text');
        $about->is_visible = request('is_visible');
        $about->position = request('position');

        $about->save();

        return redirect()->route('about_us');

    }

    public function updateAbout_us($id){
        $about = new Aboutus;

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.about_us.about_us_update',compact(['aboutuses']),
            [
                'data' => $about->find($id),
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);

    }


    public function showOneAbout_us($id){
        $about = new Aboutus();
        return view('template.create.about_us.one_about_us', ['data' => $about->find($id)],compact(['aboutuses','sliderpagetitles','aboutuspagetitles']));
    }

    public function postupdateAbout_us($id,Request $request){
        $about =  Aboutus::find($id);


        $about->text = request('text');
        $about->is_visible = request('is_visible');
        $about->position = request('position');






        $about->save();
        return redirect()->route('about_us');


    }

    public function storeDevicepagetitle(Request $request){
        $slider = new Aboututpagetitle();



        $slider->title = request('title');
        $slider->is_visible = request('is_visible');
        $slider->position = request('position');

        $slider->save();

        return redirect()->route('about_us');

    }

    public function updateAbout_uspagetitle($id){

        $about = new Aboututpagetitle;

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;


        return view('template.create.about_us.update_about_us_pagetitle',compact(['aboutuses']),
            [
                'data' => $about->find($id),
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);

    }

    public function postupdateAbout_uspagetitle($id,Request $request){
        $slider =  Aboututpagetitle::find($id);


        $slider->title = request('title');
        $slider->is_visible = request('is_visible');
        $slider->position = request('position');



        $slider->save();
        return redirect()->route('about_us');


    }




    public function deleteAbout_us($id){

        AboutUs::find($id)->delete();

        return redirect()->route('about_us');
    }

    public function deleteAbout_uspagetitle($id){

        Aboututpagetitle::find($id)->delete();

        return redirect()->route('about_us');
    }

}
