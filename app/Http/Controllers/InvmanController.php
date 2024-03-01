<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;

class InvmanController extends Controller
{
    public function index(){
        $manajemen = Management::all();
        return view('manajemen.index',compact('manajemen'));
    }
    public function create(){
        return view('manajemen.create');
    }
    public function store(Request $request){
       //dd($request->except(["_token"]));
        Management::create($request->except("_token"));
        return redirect('/manajemen');
    }
    public function edit($id){
        $manajemen = Management::find($id);
        return view('manajemen.edit',compact('manajemen'));
    }
    public function update($id, Request $request){
        $manajemen = Management::find($id);
        $manajemen->update($request->except('_token','_method'));
        return redirect('/manajemen');
    }
    public function destroy($id){
        $manajemen = Management::find($id);
        $manajemen->delete();
        return redirect('/manajemen');
    }
}
