<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;


class ControllerRoutes extends Controller
{
    public function index(){
        $rows = Register::all();

        return view('welcome', ['rows' => $rows]);
    }
    public function create(){

        return view('events.create');
    }
    public function store(Request $request){
        $row = new Register;
        $row->title = $request->title;
        $row->description = $request->description;

        $row->save();



        return redirect('/');
    }
}
