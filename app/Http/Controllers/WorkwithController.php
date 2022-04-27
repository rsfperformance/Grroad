<?php

namespace App\Http\Controllers;

use App\Models\Workwith;
use Illuminate\Http\Request;

class WorkwithController extends Controller
{
    public function edit($id)
    {
        $data = Workwith::find($id);
        return view('workwith.update', compact('data'));
    }

    public function store(Request $request)
    {
        Workwith::create($request->all());
        return back();
    }

    public function update(Request $request, $id)
    {
        Workwith::find($id)->update($request->all());
        return back();
    }
}
