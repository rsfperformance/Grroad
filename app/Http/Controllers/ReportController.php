<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('report.index');
    }
    public function create()
    {
        return view('report.create');
    }

    public function show($id)
    {
        $data = Report::find($id);
        return view('report.single', compact('data'));
    }

    public function store(Request $request)
    {
        $data = Report::create($request->all());
        if (!empty($request->photo_a)) {
            $str = Str::random(10);
            $request->photo_a->move(base_path() . '/public/img_reports/', $str . '.' . $request->photo_a->getClientOriginalExtension());

            Report::find($data->id)->update([
                'photo_a' => '/img_reports/' . $str . '.' . $request->photo_a->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->photo_b)) {
            $str = Str::random(10);
            $request->photo_b->move(base_path() . '/public/img_reports/', $str . '.' . $request->photo_b->getClientOriginalExtension());

            Report::find($data->id)->update([
                'photo_b' => '/img_reports/' . $str . '.' . $request->photo_b->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->photo_c)) {
            $str = Str::random(10);
            $request->photo_c->move(base_path() . '/public/img_reports/', $str . '.' . $request->photo_c->getClientOriginalExtension());

            Report::find($data->id)->update([
                'photo_c' => '/img_reports/' . $str . '.' . $request->photo_c->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->photo_d)) {
            $str = Str::random(10);
            $request->photo_d->move(base_path() . '/public/img_reports/', $str . '.' . $request->photo_d->getClientOriginalExtension());

            Report::find($data->id)->update([
                'photo_d' => '/img_reports/' . $str . '.' . $request->photo_d->getClientOriginalExtension()
            ]);
        }
        return back();
    }

    public function update(Request $request,$id)
    {
        $value = Arr::except($request->all(), ['photo_a', 'photo_b', 'photo_c', 'photo_d']);
        Report::find($id)->update($value);
        if (!empty($request->photo_a)) {
            if(is_file(base_path('/public' . Report::find($id)->photo_a))){
                unlink(base_path('/public' . Report::find($id)->photo_a));
            }
            $str = Str::random(10);
            $request->photo_a->move(base_path() . '/public/img_reports/', $str . '.' . $request->photo_a->getClientOriginalExtension());

            Report::find($id)->update([
                'photo_a' => '/img_reports/' . $str . '.' . $request->photo_a->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->photo_b)) {
            if(is_file(base_path('/public' . Report::find($id)->photo_b))){
                unlink(base_path('/public' . Report::find($id)->photo_b));
            }
            $str = Str::random(10);
            $request->photo_b->move(base_path() . '/public/img_reports/', $str . '.' . $request->photo_b->getClientOriginalExtension());

            Report::find($id)->update([
                'photo_b' => '/img_reports/' . $str . '.' . $request->photo_b->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->photo_c)) {
            if(is_file(base_path('/public' . Report::find($id)->photo_c))){
                unlink(base_path('/public' . Report::find($id)->photo_c));
            }
            $str = Str::random(10);
            $request->photo_c->move(base_path() . '/public/img_reports/', $str . '.' . $request->photo_c->getClientOriginalExtension());

            Report::find($id)->update([
                'photo_c' => '/img_reports/' . $str . '.' . $request->photo_c->getClientOriginalExtension()
            ]);
        }
        if (!empty($request->photo_d)) {
            if(is_file(base_path('/public' . Report::find($id)->photo_d))){
                unlink(base_path('/public' . Report::find($id)->photo_d));
            }
            $str = Str::random(10);
            $request->photo_d->move(base_path() . '/public/img_reports/', $str . '.' . $request->photo_d->getClientOriginalExtension());

            Report::find($id)->update([
                'photo_d' => '/img_reports/' . $str . '.' . $request->photo_d->getClientOriginalExtension()
            ]);
        }
        return back();
    }

    public function destroy($id)
    {
        if(is_file(base_path('/public' . Report::find($id)->photo_a))){
            unlink(base_path('/public' . Report::find($id)->photo_a));
        }
        if(is_file(base_path('/public' . Report::find($id)->photo_b))){
            unlink(base_path('/public' . Report::find($id)->photo_b));
        }
        if(is_file(base_path('/public' . Report::find($id)->photo_c))){
            unlink(base_path('/public' . Report::find($id)->photo_c));
        }
        if(is_file(base_path('/public' . Report::find($id)->photo_d))){
            unlink(base_path('/public' . Report::find($id)->photo_d));
        }
        Report::find($id)->delete();
        return back();
    }
}
