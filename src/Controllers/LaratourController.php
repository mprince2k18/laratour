<?php

namespace Mprince\Laratour\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LaratourController extends Controller
{

    public function index()
    {
        return view('laratour::index');
    }
    //END
}
