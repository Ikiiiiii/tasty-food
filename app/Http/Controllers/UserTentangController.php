<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTentangController extends Controller
{
    //
    function show(){
        return view('user.page.tentang');
    }
}
