<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        // dd(11111);
        $str = "Test view";
        return view('contact.index',compact('str'));
    }
}
