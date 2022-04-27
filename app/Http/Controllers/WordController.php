<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        Word::create($request->all());
        return back();
    }

    public function create()
    {
        return view('word.create');
    }

    public function update(Request $request,$id)
    {
        Word::find($id)->update($request->all());
        return back();
    }
}
