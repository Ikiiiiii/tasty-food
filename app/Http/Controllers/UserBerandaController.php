<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserBerandaController extends Controller
{
    //
    function show(){
        return view('user.page.beranda');
    }
}
