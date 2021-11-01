<?php

namespace Mprince\Laratour\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mprince\Laratour\Laratour;

class LaratourController extends Controller
{

    public function index()
    {
        return view('laratour::index');
    }

    public function store(Request $request)
    {
        $tour = new Laratour;
        $tour->element = $request->element;
        $tour->title = $request->title;
        $tour->content = $request->content;
        $tour->placement = $request->placement;
        $tour->path = $request->path;
        $tour->save();
        return back();
    }
    //END
}
