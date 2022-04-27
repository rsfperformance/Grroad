<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Project;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        return view('project.index');
    }
    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
           $data = Project::create([
                'header_ru' => $request->get('header_ru'),
                'header_uz' => $request->get('header_uz'),
                'header_en' => $request->get('header_en'),
                'description_ru' => $request->get('description_ru'),
                'description_uz' => $request->get('description_uz'),
                'description_en' => $request->get('description_en'),
                'time' => $request->get('time'),
                'height' => $request->get('height'),
                'territory' => $request->get('territory'),
                'number_of_lanes' => $request->get('number_of_lanes')
            ]);
            if (!empty($request->photo)) {
                $str = Str::random(10);
                $request->photo->move(base_path() . '/public/img_project/', $str . '.' . $request->photo->getClientOriginalExtension());

                Project::find($data->id)->update([
                    'photo' => '/img_project/' . $str . '.' . $request->photo->getClientOriginalExtension()
                ]);
            }
        return back();
    }

    public function update(Request $request,$id)
    {
        $value = Arr::except($request->all(), ['photo']);
        Project::find($id)->update($value);
        if (!empty($request->photo)) {
            if(is_file(base_path('/public' . Project::find($id)->photo))){
                unlink(base_path('/public' . Project::find($id)->photo));
            }
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_project/', $str . '.' . $request->photo->getClientOriginalExtension());

            Project::find($id)->update([
                'photo' => '/img_project/' . $str . '.' . $request->photo->getClientOriginalExtension()
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
