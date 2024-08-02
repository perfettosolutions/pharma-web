<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function homepage()
    {
        return view('visitor.home.index');
    }
    
    public function productionpage()
    {
        return view('visitor.production.index');
    }
    public function profile()
    {
        return view('visitor.profile.index');
    }
    public function contact()
    {
        return view('visitor.contact.index');
    }

}
