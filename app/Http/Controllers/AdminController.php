<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminGetHandler(Request $request){
        return view('components.admin');
    }
}
