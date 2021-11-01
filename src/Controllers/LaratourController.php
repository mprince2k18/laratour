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

    public function create()
    {
        return view('laratour::create');
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

    public function update(Request $request, $id)
    {
        $tour = Laratour::where('id', $id)->first();
        $tour->element = $request->element;
        $tour->title = $request->title;
        $tour->content = $request->content;
        $tour->placement = $request->placement;
        $tour->path = $request->path;
        $tour->save();
        return back();
    }

    public function destroy($id)
    {
        Laratour::where('id', $id)->delete();
        return back();
    }
    //END
}
