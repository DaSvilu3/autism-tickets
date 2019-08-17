<?php

namespace App\Http\Controllers;
use App\Mail\TestEmail;

use Illuminate\Http\Request;
use Mail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sendM (){
        
        $data = ['message' => 'This is a test!'];

        Mail::to('echomoodgogler@gmail.com')->send(new TestEmail($data));

    }
}
