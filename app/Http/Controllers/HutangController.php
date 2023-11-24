<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Hutang;

class HutangController extends Controller
{

public function index()

{
    //
    $Hutang =Hutang::all();
    return view('Hutang.index', compact('Hutang'));
}

public function create()
{
    //
    return view('Hutang.create');
}

public function store(request $request, Hutang $Hutang)
 { //
     $request->validate([
        'nama'=> 'required',
        'jumlah'=> 'required',
        'catatan'=> 'required',
        'tgl_hutang'=> 'required',
        'tgl_jthtempo'=> 'required',
     ]);
     $Hutang = new Hutang;
     
      $Hutang->nama = $request->nama;
      $Hutang->jumlah =$request->jumlah;
      $Hutang->catatan =$request->catatan;
      $Hutang->tgl_hutang =$request->tgl_hutang;
      $Hutang->tgl_jthtempo =$request->tgl_jthtempo;
      $Hutang->save();

      return redirect()->route('Hutang.index');
    }
     
    public function show( Hutang $Hutang)
{
    //
    $Hutang = Hutang::all();
    return view('Hutang.show', compact('Hutang'));

}
 
public function edit(Hutang $Hutang)
{
    //
    return view('Hutang.edit',compact('Hutang'));
}

public function update(request $request, Hutang $Hutang)
{
    //
    $request->validate([
        'nama'=> 'required',
        'jumlah'=> 'required',
        'catatan'=> 'required',
        'tgl_hutang'=> 'required',
        'tgl_jthtempo'=> 'required',
     ]);
     $Hutang->update($request->all());
     return redirect()->route('Hutang.index');
        
}


public function destroy(Hutang $Hutang)
{
    //
    $Hutang = Hutang::where('id',$Hutang->id)->delete();
    return redirect()->route('Hutang.index');
}
}