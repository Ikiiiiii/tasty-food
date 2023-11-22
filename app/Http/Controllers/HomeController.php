<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    function show(){
        $data['product'] = Product::all();
        $data['news'] = News::first();
        $data['newss'] = News::all();
        return view('home',$data);
    }
}
