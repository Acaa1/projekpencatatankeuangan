<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\DanaDarurat;

class DanaDaruratController extends Controller
{

public function index()

{
    //
    $DanaDarurat = DanaDarurat::all();
    return view('DanaDarurat.index', compact('DanaDarurat'));
}

public function create()
{
    //
    return view('DanaDarurat.create');
}

public function store(request $request, DanaDarurat $DanaDarurat)
 { //
     $request->validate([
        'nama'=> 'required',
        'catatan'=> 'required',
        'jumlah'=> 'required',
        'tanggal'=> 'required',
     ]);
     $DanaDarurat = new DanaDarurat;
     
      $DanaDarurat->nama = $request->nama;
      $DanaDarurat->catatan =$request->catatan;
      $DanaDarurat->jumlah =$request->jumlah;
      $DanaDarurat->tanggal =$request->tanggal;
      $DanaDarurat->save();


      return redirect()->route('DanaDarurat.index');
    }
     
    public function show( DanaDarurat $DanaDarurat)
{
    //
    $DanaDarurat = DanaDarurat::all();
    return view('DanaDarurat.show', compact('DanaDarurat'));

}
 
public function edit(DanaDarurat $DanaDarurat)
{
    //
    return view('DanaDarurat.edit',compact('DanaDarurat'));
}

public function update(request $request, DanaDarurat $DanaDarurat)
{
    //
    $request->validate([
        'nama'=> 'required',
        'catatan'=> 'required',
        'jumlah'=> 'required',
        'tanggal'=> 'required',
     ]);
     $DanaDarurat->update($request->all());
     return redirect()->route('DanaDarurat.index');
        
}


public function destroy(DanaDarurat $DanaDarurat)
{
    //
    $DanaDarurat = DanaDarurat::where('id',$DanaDarurat->id)->delete();
    return redirect()->route('DanaDarurat.index');
}
}