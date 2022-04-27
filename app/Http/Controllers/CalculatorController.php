<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class CalculatorController extends Controller
{
    public function store(Request $request)
    {
        $data = Service::create($request->all());
        if (!empty($request->photo)) {
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_calculator/', $str . '.' . $request->photo->getClientOriginalExtension());

            Service::find($data->id)->update([
                'photo' => '/img_calculator/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }
    public function update(Request $request,$id)
    {
        $value = Arr::except($request->all(), ['photo']);
        Service::find($id)->update($value);
        if (!empty($request->photo)) {
            if(is_file(base_path('/public' . Service::find($id)->photo))){
                unlink(base_path('/public' . Service::find($id)->photo));
            }
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_calculator/', $str . '.' . $request->photo->getClientOriginalExtension());

            Service::find($id)->update([
                'photo' => '/img_calculator/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }
    public function create()
    {
        return view('calculator.create');
    }
    public function destroy($id)
    {
        if(is_file(base_path('/public' . Service::find($id)->photo))){
            unlink(base_path('/public' . Service::find($id)->photo));
        }
        Service::find($id)->delete();
        return back();
    }
}
