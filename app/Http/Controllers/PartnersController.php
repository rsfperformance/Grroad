<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Partners;

class PartnersController extends Controller
{
    public function create()
    {
        return view('partners.create');
    }
    public function store(Request $request)
    {
        if (!empty($request->photo)) {
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_partners/', $str . '.' . $request->photo->getClientOriginalExtension());

            Partners::create([
                'photo' => '/img_partners/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }

    public function update(Request $request, $id)
    {
        if (!empty($request->photo)) {
            if(is_file(base_path('/public'. Partners::find($id)->photo))){
                unlink(base_path('/public'. Partners::find($id)->photo));
            }
            $str = Str::random(10);
            $request->photo->move(base_path() . '/public/img_partners/', $str . '.' . $request->photo->getClientOriginalExtension());

            Partners::find($id)->update([
                'photo' => '/img_partners/' . $str . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }
        return back();
    }
    public function destroy($id)
    {
        if(is_file(base_path('/public'. Partners::find($id)->photo))){
            unlink(base_path('/public'. Partners::find($id)->photo));
        }
        Partners::find($id)->delete();
        return back();
    }
}
