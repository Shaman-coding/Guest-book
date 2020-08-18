<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function edit($id)
    {
        # code...
        return view('edit');
    }
}
