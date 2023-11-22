<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function topDonates()
    {
        return view('topDonates');
    }
    public function patrocinadores()
    {
        return view('patrocinadores');
    }

    public function projects()
    {
        return view('projects');
    }

    public function project_detail1()
    {
        return view('project_detail1');
    }

    public function project_detail2()
    {
        return view('project_detail2');
    }

    public function tornarMembro()
    {
        return view('tornarMembro');
    }
    public function sobreNos()
    {
        return view('sobreNos');
    }
<<<<<<< HEAD
    
    public function eventos()
    {
        return view('eventos');
=======
    public function galeria()
    {
        return view('galeria');
>>>>>>> 43842e142f220424a5ba29f5d67727a0e5e09488
    }
}
