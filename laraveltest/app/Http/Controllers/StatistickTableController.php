<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statistick;
use App\Stattablepagetitle;

use App\Sliderpagetitle;
use App\Aboututpagetitle;
use App\Activitypagetitle;
use App\Detailpagetitle;
use App\Infohoverpagetitle;
use App\Contactspagetitle;

class StatistickTableController extends Controller
{
    public function Statistick(){
        $statisticks = Statistick::all();

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.statistick_table.statistick_table' ,compact(['statisticks']),
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

        return view('template.create.statistick_table.statistick_table_create',compact(['statisticks']),
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


        return view('template.create.statistick_table.create_statistick_table_pagetitle',compact(['statisticks']),
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

        $statistick = new Statistick();

        $path = $request->file('img')->store('uploads','public');
        $statistick->img =$path;


        $statistick->title = request('title');
        $statistick->text = request('text');
        $statistick->is_visible = request('is_visible');
        $statistick->position = request('position');

        $statistick->save();

        return redirect()->route('statistick', ['path' => $path]);

    }

    public function storeDevicepagetitle(Request $request){

        $detail = new Stattablepagetitle();

        $detail->title = request('title');
        $detail->is_visible = request('is_visible');
        $detail->position = request('position');

        $detail->save();

        return redirect()->route('statistick');

    }

    public function updateStatistick($id){
        $detail = new Statistick;

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;

        return view('template.create.statistick_table.statistick_table_update',compact(['statisticks']),
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

    public function updateStatistickpagetitle($id){
        $detail = new Stattablepagetitle;

        $aboutuspagetitles = new Aboututpagetitle;
        $sliderpagetitles = new  Sliderpagetitle;
        $activitypagetitles = new Activitypagetitle;
        $detailpagetitle = new Detailpagetitle;
        $stattablepagetitles = new Stattablepagetitle;
        $infohoverpagetitles = new Infohoverpagetitle;
        $contactspagetitles = new Contactspagetitle;


        return view('template.create.statistick_table.update_statistick_table_pagetitle',compact(['statisticks']),
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

    public function showOneStatistick($id){
        $detail = new Statistick();
        return view('template.create.statistick_table.one_statistick_table', ['data' => $detail->find($id)]);
    }

    public function postupdateStatistick($id,Request $request){

        $detail =  Statistick::find($id);

        if(!empty($request->img)){
            if (file_exists($_SERVER['DOCUMENT_ROOT'].'/storage/'.$detail->img)){
                unlink($_SERVER['DOCUMENT_ROOT'].'/storage/'.$detail->img);
            }
            $path = $request->file('img')->store('uploads','public');
            $detail->img =$path;
        }

        $detail->title = request('title');
        $detail->text = request('text');
        $detail->is_visible = request('is_visible');
        $detail->position = request('position');






        $detail->save();
        return redirect()->route('statistick');


    }

    public function postupdateStatistickpagetitle($id,Request $request){

        $detail =  Stattablepagetitle::find($id);


        $detail->title = request('title');
        $detail->is_visible = request('is_visible');
        $detail->position = request('position');


        $detail->save();
        return redirect()->route('statistick');

    }


    public function deleteStatistick($id){

        Statistick::find($id)->delete();

        return redirect()->route('statistick');
    }

    public function deleteStatistickpagetitle($id){

        Stattablepagetitle::find($id)->delete();

        return redirect()->route('statistick');
    }
}
