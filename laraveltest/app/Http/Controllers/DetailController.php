<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;



use App\Sliderpagetitle;
use App\Aboututpagetitle;
use App\Activitypagetitle;
use App\Detailpagetitle;
use App\Stattablepagetitle;
use App\Infohoverpagetitle;
use App\Contactspagetitle;



class DetailController extends Controller
{
    public function Detail(){
        $details = Detail::all();

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;


        return view('template.create.detail.detail',compact(['details']),
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

        return view('template.create.detail.detail_create' ,compact(['details']),
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


        return view('template.create.detail.create_detailpagetitle',compact(['details']),
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

        $detail = new Detail();


        $detail->text = request('text');
        $detail->is_visible = request('is_visible');
        $detail->position = request('position');

        $detail->save();

        return redirect()->route('detail');

    }

    public function storeDevicepagetitle(Request $request){

        $detail = new Detailpagetitle();

        $detail->title = request('title');
        $detail->is_visible = request('is_visible');
        $detail->position = request('position');

        $detail->save();

        return redirect()->route('detail');

    }

    public function updateDetail($id){

        $detail = new Detail;

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.detail.detail_update',compact(['details']),
            [
                'data' => $detail->find($id),
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);

    }

    public function updateDetailpagetitle($id){

        $detail = new Detailpagetitle;

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.detail.update_detailpagetitle',compact(['details']),
            [
                'data' => $detail->find($id),
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);

    }

    public function showOneDetail($id){
        $detail = new Detail();
        return view('template.create.detail.one_detail', ['data' => $detail->find($id)]);
    }

    public function postupdateDetail($id,Request $request){

        $detail =  Detail::find($id);


        $detail->text = request('text');
        $detail->is_visible = request('is_visible');
        $detail->position = request('position');



        $detail->save();
        return redirect()->route('detail');

    }

    public function postupdateDetailpagetitle($id,Request $request){

        $detail =  Detailpagetitle::find($id);


        $detail->title = request('title');
        $detail->is_visible = request('is_visible');
        $detail->position = request('position');


        $detail->save();
        return redirect()->route('detail');

    }

    public function deleteDetail($id){

        Detail::find($id)->delete();

        return redirect()->route('detail');
    }

    public function deleteDetailpagetitle($id){

        Detailpagetitle::find($id)->delete();

        return redirect()->route('detail');
    }
}
