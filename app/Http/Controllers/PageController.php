<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function topDonates(){
    	return view('topDonates');
    }
    public function patrocinadores(){
    	return view('patrocinadores');
    }

    public function projects(){
        return view('projects');
    }

    public function tornarMembro(){
        return view('tornarMembro');
    }
}

