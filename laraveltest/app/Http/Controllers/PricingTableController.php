<?php

namespace App\Http\Controllers;

use App\Pricingtable;


use Illuminate\Http\Request;

class PricingTableController extends Controller
{
    public function Pricing(){
        $pricingtables = Pricingtable::all();





        return view('template.create.Pricingtable.pricingtable' ,compact(['pricingtables']));
    }

    public function create(){


        return view('template.create.Pricingtable.pricingtable_create',compact(['aboutuses']));
    }

    public function createpagetitle(){


        return view('template.create.about_us.create_about_us_pagetitle',compact(['aboutuses']));
    }


    public function storeDevice(Request $request){

        $about = new Pricingtable();

        $about->text = request('text');
        $about->is_visible = request('is_visible');
        $about->position = request('position');

        $about->save();

        return redirect()->route('pricing');

    }

    public function updatePricing($id){
        $about = new Pricingtable;



        return view('template.create.Pricingtable.pricingtable_update',compact(['aboutuses']));

    }


    public function showOnePricing($id){
        $about = new Pricingtable();
        return view('template.create.Pricingtable.one_pricingtable', ['data' => $about->find($id)],compact(['aboutuses','sliderpagetitles','aboutuspagetitles']));
    }

    public function postupdatePricing($id,Request $request){
        $about =  Pricingtable::find($id);


        $about->text = request('text');
        $about->is_visible = request('is_visible');
        $about->position = request('position');






        $about->save();
        return redirect()->route('pricing');


    }

    public function deletePricing($id){

        Pricingtable::find($id)->delete();

        return redirect()->route('pricing');
    }



}
