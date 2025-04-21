<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        return view("index");
    }
    public function create(){
        return view("create");
    }
    public function profile($id){
        return view("profile",["id"=>$id]);

    }

}
