<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

use App\Document;

class DocumentController extends Controller
{
    //

    public function index()
    {
        # code...
        $doc = Document::all();
        return view('document.list', ["doc"=>$doc]);
    }

    
    public function download()
    {
        # code...
        
        $file= public_path() . "/pdf/". request('idd');

        

          return Response::download($file, request('idd'));
    }
}
