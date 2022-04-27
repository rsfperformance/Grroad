<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id){
        $data = Production::find($id);
        return view('production.update', compact('data'));
    }

    public function store(Request $request){
        Production::create($request->all());
        return back();
    }

    public function update(Request $request, $id){
        Production::find($id)->update($request->all());
        return back();
    }
}
