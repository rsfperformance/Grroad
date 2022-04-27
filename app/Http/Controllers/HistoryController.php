<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Year;
use Illuminate\Support\Arr;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $data = History::create($request->all());
        if (!empty($request->photo)) {
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_history/', $str . '.' . $request->photo->getClientOriginalExtension());

            History::find($data->id)->update([
                'photo' => '/img_history/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }
    public function year(Request $request)
    {
        Year::create($request->all());
        return back();
    }

    public function update(Request $request,$id)
    {
        $value = Arr::except($request->all(), ['photo']);
        History::find($id)->update($value);
        if (!empty($request->photo)) {
            if(is_file(base_path('/public' . History::find($id)->photo))){
                unlink(base_path('/public' . History::find($id)->photo));
            }
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_history/', $str . '.' . $request->photo->getClientOriginalExtension());

            History::find($id)->update([
                'photo' => '/img_history/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }
    public function destroy($id)
    {
        if(is_file(base_path('/public' . History::find($id)->photo))){
            unlink(base_path('/public' . History::find($id)->photo));
        }
        History::find($id)->delete();
        return back();
    }
}
