<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use Illuminate\Support\Str;

class CatalogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit($id)
    {
        $data =Catalog::find($id);
        return view('catalog.update', compact('data'));
    }
    public function store(Request $request)
    {
        if (!empty($request->catalog)) {
            $str = Str::random(10);
            $request->catalog->move(base_path() . '/public/catalog/', $str . '.' . $request->catalog->getClientOriginalExtension());

            Catalog::create([
                'catalog' => '/catalog/' . $str . '.' . $request->catalog->getClientOriginalExtension()
            ]);
        }
        return back();

    }
    public function update(Request $request, $id)
    {
        if (!empty($request->catalog)) {
            if(is_file(base_path('/public' . Catalog::find($id)->catalog))){
                unlink(base_path('/public' . Catalog::find($id)->catalog));
            }
            $str = Str::random(10);
            $request->catalog->move(base_path() . '/public/catalog/', $str . '.' . $request->catalog->getClientOriginalExtension());

            Catalog::find($id)->update([
                'catalog' => '/catalog/' . $str . '.' . $request->catalog->getClientOriginalExtension()
            ]);
        }
        return back();
    }
}
