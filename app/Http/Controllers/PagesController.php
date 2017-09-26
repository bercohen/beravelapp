<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel!';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about') ->with('title',$title);
    }
    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['Full Stack Web development', 'Front End: HTML, CSS, Javascript, Bootsrap','Ruby: Sinatra, Rais','C#: .NET','PHP:Laravel']
        );
        return view('pages.services') ->with($data);
        
    }
}
