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
    public function product()
    {
        // Fetch data from the JSON file
        $jsonData = file_get_contents(public_path('json/product.json'));
        $data = json_decode($jsonData, true)['products'];

        return view('visitor.product.index', compact('data'));
    }
}
