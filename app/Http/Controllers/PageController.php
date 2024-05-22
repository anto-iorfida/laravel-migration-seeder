<?php

namespace App\Http\Controllers;

use App\Models\Train;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        // dd($trains);
        return view('home', ['trains' => $trains]);
        //  $data = ['trains' => $train];
        // return view('home',$data);
    }
}
