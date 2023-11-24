<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Piutang;

class PiutangController extends Controller
{

public function index()

{
    //
    $Piutang =Piutang::all();
    return view('Piutang.index', compact('Piutang'));
}

public function create()
{
    //
    return view('Piutang.create');
}

public function store(request $request, Piutang $Piutang)
 { //
    //  dd($request);
     $request->validate([
        'nama'=> 'required',
        'jumlah'=> 'required',
        'catatan'=> 'required',
        'tgl_piutang'=> 'required',
        'tgl_jthtempo'=> 'required',
     ]);

    //  dd($request);
     $Piutang = new Piutang;
     
      $Piutang->nama= $request->nama;
      $Piutang->jumlah =$request->jumlah;
      $Piutang->catatan =$request->catatan;
      $Piutang->tgl_piutang =$request->tgl_piutang;
      $Piutang->tgl_jthtempo =$request->tgl_jthtempo;
      $Piutang->save();

      return redirect()->route('Piutang.index');
    }
     
    public function show( Piutang $Piutang)
{
    // 
       $Piutang = Piutang::all();
       return view('Piutang.show', compact('Piutang'));

}
 
public function edit(Piutang $Piutang)
{
    //
    return view('Piutang.edit',compact('Piutang'));
}

public function update(request $request, Piutang $Piutang)
{
    //
    $request->validate([
        'nama'=> 'required',
        'jumlah'=> 'required',
        'catatan'=> 'required',
        'tanggal'=> 'required',
        'kategori'=> 'required',
     ]);
     $Piutang->update($request->all());
     return redirect()->route('Piutang.index');
        
}


public function destroy(Piutang $Piutang)
{
    //
    $Piutang = Piutang::where('id',$Piutang->id)->delete();
    return redirect()->route('Piutang.index');
}
}