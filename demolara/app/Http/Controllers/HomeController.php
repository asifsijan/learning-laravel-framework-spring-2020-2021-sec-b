<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('home.create');
    }


    public function store(Request $req){

        //insert into DB or model...
        echo $req->username;

       // return redirect('/home/userlist');
    }

}
