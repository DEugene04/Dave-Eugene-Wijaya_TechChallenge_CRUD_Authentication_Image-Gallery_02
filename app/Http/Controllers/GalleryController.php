<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class GalleryController extends Controller
{
    function store(Request $request){
        $request->validate([
            'foto' => ['required', 'image'],
            'name' => ['required']
        ]);

        $filename = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('public/'.$filename);

        gallery::create([
            'foto' => $filename,
            'name' => $request->name
        ]);

        return redirect('/');
    }

    function showFoto(){
        $foto = gallery::all();
        return view ('welcome', compact('foto'));
    }

    function delete($id){
        $dataFoto = gallery::find($id);
        gallery::destroy($id);
        Storage::delete('/public'.'/'.$dataFoto->foto);
        return redirect('/');
    }
}
