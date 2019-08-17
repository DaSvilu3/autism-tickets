<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talk;
use Illuminate\Support\Facades\DB;

class TalkController extends Controller
{
    //


    public function list()
    {
        # code...
        $talks = DB::select('SELECT talks.* , speakers.name_en, speakers.img FROM `talks` INNER JOIN speakers ON talks.speaker_id = speakers.id');
        // return $talks;
        return view('session.list', ["talks" => $talks]);
    }
}
