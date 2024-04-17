<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home.index');
    }
    public function villa()
    {
        return view('pages.villa.index');
    }
    public function gallery()
    {
        return view('pages.gallery.index');
    }
    public function contact()
    {
        return view('pages.contact.index');
    }
}
