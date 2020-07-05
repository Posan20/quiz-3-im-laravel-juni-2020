<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    public function index(){
        Alert::success('Success Title', 'Success Message');
        $artikel = ArtikelModel::get_all();
        // dd($items);
        return view('artikel.index', compact('artikel'));
    }

    public function create(){
        return view('artikel.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $artikel = ArtikelModel::save($data);
        if($artikel){
            return redirect('/artikel');
        }
    }

    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);

        return view('artikel.show', compact('artikel'));
    }

    public function edit($id){
        $artikel = ArtikelModel::find_by_id($id);

        return view('artikel.edit', compact('artikel'));
    }

    public function update($id, Request $request){
        // dd($request->all());
        $artikel = ArtikelModel::update($id, $request->all());

        return redirect('/artikel');
    }

    public function destroy($id){
        $deleted = ArtikelModel::destroy($id);

        return redirect('/artikel');
    }
}
