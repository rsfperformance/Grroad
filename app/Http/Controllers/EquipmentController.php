<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class EquipmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('project.index');
    }
    public function create()
    {
        return view('equipment.create');
    }

    public function store(Request $request)
    {
        $data = Equipment::create($request->all());
        if (!empty($request->photo)) {
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_equipment/', $str . '.' . $request->photo->getClientOriginalExtension());

            Equipment::find($data->id)->update([
                'photo' => '/img_equipment/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }

    public function update(Request $request,$id)
    {
        $value = Arr::except($request->all(), ['photo']);
        Equipment::find($id)->update($value);
        if (!empty($request->photo)) {
            if(is_file(base_path('/public' . Equipment::find($id)->photo))){
                unlink(base_path('/public' . Equipment::find($id)->photo));
            }
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_equipment/', $str . '.' . $request->photo->getClientOriginalExtension());

            Equipment::find($id)->update([
                'photo' => '/img_equipment/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();

    }

    public function destroy($id)
    {
        if(is_file(base_path('/public' . Equipment::find($id)->photo))){
            unlink(base_path('/public' . Equipment::find($id)->photo));
        }
        Equipment::find($id)->delete();
        return back();
    }
}
