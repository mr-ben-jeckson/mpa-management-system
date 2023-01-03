<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(){
        return view('admin.home.dashboard');
    }

    public function test(){
        return view('admin.test');
    }
}
