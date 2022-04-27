<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MaterialsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','index');
    }

    public function index()
    {
        return view('material.data-inert');
    }

    public function edit($id)
    {
        $data = $id;
        if($id == 1){
            return view('material.inert', compact('data'));
        }
        if($id == 2){
            return view('material.asphalt', compact('data'));
        }
    }

    public function show($id)
    {
        $data = Materials::find($id);
        if($data->class == 1){
            return view('material.data-single', compact('data'));
        }
        if($data->class == 2){
            return view('material.data-single', compact('data'));
        }
    }

    public function store(Request $request)
    {
        $data = Materials::create($request->all());
        if (!empty($request->photo)) {
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_materials/', $str . '.' . $request->photo->getClientOriginalExtension());

            Materials::find($data->id)->update([
                'photo' => '/img_materials/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }

    public function update(Request $request,$id)
    {
        $value = Arr::except($request->all(), ['photo']);
        Materials::find($id)->update($value);
        if (!empty($request->photo)) {
            if(is_file(base_path('/public' . Materials::find($id)->photo))){
                unlink(base_path('/public' . Materials::find($id)->photo));
            }
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_materials/', $str . '.' . $request->photo->getClientOriginalExtension());

            Materials::find($id)->update([
                'photo' => '/img_materials/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();

    }

    public function destroy($id)
    {
        if(is_file(base_path('/public' . Project::find($id)->photo))){
            unlink(base_path('/public' . Project::find($id)->photo));
        }
        Project::find($id)->delete();
        return back();
    }
}
