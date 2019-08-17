<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Ticket;

class NewTicket extends Controller
{
    //

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
        $user = auth()->user();
        return view('tickets.new', ["user" => $user]);
    }

    public function list()
    {
        $user = auth()->user();
        $tickets = Ticket::where('user_id', $user->id)->select("id", "name", "created_at", "ticket_type")->get();
        return view('tickets.list', ['tickets' => $tickets]);
    }

    public function create()
    {

        $count = request('count');
        $user = auth()->user();

        for($i=0; $i < $count; $i +=1) {
            $t = new Ticket;
            $t->name = request('name');
            $t->code = sha1(time()*mt_rand(0,10000));
            $t->ticket_type = request('usage');
            $t->user_id = $user->id;
            $t->save();
            usleep(100);
        }
       
        
        return redirect('/ticket/list');
        // var_dump(request('count'));

        // $ticket
        // return view('tickets.list');
    }

    public function show()
    {


        $id = request('idd');
        $ticket = Ticket::where('id',$id)->first();
        
        return view('tickets.view', ['tck' => $ticket]);
    }
}
