<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function edit($id)
    {
        $data = Contacts::find($id);
        return view('contacts.update', compact('data'));
    }
    public function store(Request $request)
    {
     Contacts::create($request->all());
     return back();
    }
    public function update(Request $request, $id)
    {
        Contacts::find($id)->update($request->all());
        return back();
    }
}
