<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        return view('about.index');
    }
    public function edit($id)
    {
        $data = About::find($id);
        return view('about.update', compact('data'));
    }
    public function store(Request $request)
    {
        $data = About::create($request->all());
        if (!empty($request->photo)) {

            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_about/', $str . '.' . $request->photo->getClientOriginalExtension());

             About::find($data->id)->update([
                'photo' => '/img_about/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }

    public function update(Request $request,$id)
    {
        $value =  Arr::except($request->all(), ['photo']);
        About::find($id)->update($value);
        if (!empty($request->photo)) {
            if(is_file(base_path('/public' . About::find($id)->photo))){
                unlink(base_path('/public' . About::find($id)->photo));
            }
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_about/', $str . '.' . $request->photo->getClientOriginalExtension());

            About::find($id)->update([
                'photo' => '/img_about/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }
}
