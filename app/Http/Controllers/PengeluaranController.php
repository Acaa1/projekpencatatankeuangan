<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pengeluaran;

class PengeluaranController extends Controller
{

public function index()

{
    //
    $Pengeluaran =Pengeluaran::all();
    return view('Pengeluaran.index', compact('Pengeluaran'));
}

public function create()
{
    //
    return view('Pengeluaran.create');
}

public function store(request $request, Pengeluaran $Pengeluaran)
 { //
    //  dd($request);
     $request->validate([
        'nama'=> 'required',
        'jumlah'=> 'required',
        'catatan'=> 'required',
        'tanggal'=> 'required',
        'Kategori'=> 'required',
     ]);

    //  dd($request);
     $Pengeluaran = new Pengeluaran;
     
      $Pengeluaran->nama= $request->nama;
      $Pengeluaran->jumlah =$request->jumlah;
      $Pengeluaran->catatan =$request->catatan;
      $Pengeluaran->tanggal =$request->tanggal;
      $Pengeluaran->Kategori =$request->Kategori;
      $Pengeluaran->save();

      return redirect()->route('Pengeluaran.index');
    }
     
    public function show( Pengeluaran $Pengeluaran)
{
    // 
       $Pengeluaran = Pengeluaran::all();
       return view('Pengeluaran.show', compact('Pengeluaran'));

}
 
public function edit(Pengeluaran $Pengeluaran)
{
    //
    return view('Pengeluaran.edit',compact('Pengeluaran'));
}

public function update(request $request, Pengeluaran $Pengeluaran)
{
    //
    $request->validate([
        'nama'=> 'required',
        'jumlah'=> 'required',
        'catatan'=> 'required',
        'tanggal'=> 'required',
        'kategori'=> 'required',
     ]);
     $Pengeluaran->update($request->all());
     return redirect()->route('Pengeluaran.index');
        
}


public function destroy(Pengeluaran $Pengeluaran)
{
    //
    $Pengeluaran = Pengeluaran::where('id',$Pengeluaran->id)->delete();
    return redirect()->route('Pengeluaran.index');
}
}