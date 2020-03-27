<?php

namespace App\Http\Controllers;

use App\file_type;
use App\files;
use Illuminate\Http\Request;
class FileController extends Controller
{
    public function index()
    {
        $sliders = files::all();
        $types = file_type::all();


        return view('template.table',compact(['sliders']));

    }
}
