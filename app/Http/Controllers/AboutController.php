<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showAbout(){
        return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "PT TAPANULI MOTOR",
        "email" => "tapanuli.motorjaya@gmail.com",
        "image" => "TM.jpg"
    ]);
    }
}
