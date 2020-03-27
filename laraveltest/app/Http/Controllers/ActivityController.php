<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Activitypagetitle;

use App\Sliderpagetitle;
use App\Aboututpagetitle;
use App\Detailpagetitle;
use App\Stattablepagetitle;
use App\Infohoverpagetitle;
use App\Contactspagetitle;

class ActivityController extends Controller
{
    public function Activity(){
        $activities = Activity::all();

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.activity.activity' ,compact(['activities']),
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

        return view('template.create.activity.activity_create',compact(['activities']),
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

        return view('template.create.activity.create_activitypagetitle',compact(['activities']),
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
        $activities = new Activity();

        $activities->text = request('text');
        $activities->is_visible = request('is_visible');
        $activities->position = request('position');

        $activities->save();

        return redirect()->route('activity');

    }


    public function storeDevicepagetitle(Request $request){
        $activities = new Activitypagetitle();


        $activities->title = request('title');
        $activities->is_visible = request('is_visible');
        $activities->position = request('position');

        $activities->save();

        return redirect()->route('activity');

    }


    public function updateActivity($id){
        $activities = new Activity;

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.activity.activity_update',compact(['activities']),
            [
                'data' => $activities->find($id),
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);

    }

    public function updateActivitypagetitle($id){
        $activities = new Activitypagetitle;

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.activity.update_activitypagetitle',compact(['activities']),
            [
                'data' => $activities->find($id),
                'aboutuspagetitles' => $aboutuspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'sliderpagetitles' => $sliderpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'activitypagetitles' => $activitypagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'detailpagetitle' => $detailpagetitle->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'stattablepagetitles' => $stattablepagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'infohoverpagetitles' => $infohoverpagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),
                'contactspagetitles' => $contactspagetitles->where('is_visible', '=', '1')->orderBy('position','asc')->get(),

            ]);

    }

    public function showOneActivity($id){
        $activities = new Activity();
        return view('template.create.activity.one_activity', ['data' => $activities->find($id)],compact(['activities','activitypagetitles','sliderpagetitles','aboutuspagetitles']));
    }

    public function postupdateActivity($id,Request $request){

        $activities =  Activity::find($id);


        $activities->text = request('text');
        $activities->is_visible = request('is_visible');
        $activities->position = request('position');

        $activities->save();

        return redirect()->route('activity');


    }

    public function postupdateActivitypagetitle($id,Request $request){

        $activities =  Activitypagetitle::find($id);


        $activities->title = request('title');
        $activities->is_visible = request('is_visible');
        $activities->position = request('position');






        $activities->save();
        return redirect()->route('activity');


    }

    public function deleteActivity($id){

        Activity::find($id)->delete();

        return redirect()->route('activity');
    }

    public function deleteActivitypagetitle($id){

        Activitypagetitle::find($id)->delete();

        return redirect()->route('activity');
    }
}
