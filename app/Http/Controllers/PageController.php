<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view('main');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function project()
    {
        return view('project');
    }
    public function pages()
    {
        return view('pages');
    }
    public function contact()
    {
        return view('contact');
    }

}
