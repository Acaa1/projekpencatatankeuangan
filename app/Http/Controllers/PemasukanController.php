<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pemasukan;

class PemasukanController extends Controller
{

public function index()

{
    //
    $Pemasukan =Pemasukan::all();
    return view('PencatatKeuangan.index', compact('Pemasukan'));
}

public function create()
{
    //
    return view('PencatatKeuangan.create');
}

public function store(request $request, Pemasukan $Pemasukan)
 { //
//  dd($request);
     $request->validate([
        'nama_Pemasukan'=> 'required',
        'jumlah'=> 'required',
        'catatan'=> 'required',
        'tanggal'=> 'required',
        'kategori'=> 'required',
     ]);

     //dd($request);
     $Pemasukan = new Pemasukan;
     
      $Pemasukan->nama_pemasukan = $request->nama_Pemasukan;
      $Pemasukan->jumlah =$request->jumlah;
      $Pemasukan->catatan =$request->jumlah;
      $Pemasukan->tanggal =$request->tanggal;
      $Pemasukan->kategori =$request->kategori;
      $Pemasukan->save();

      return redirect()->route('Pemasukan.index');
    }
     
    public function show( Pemasukan $Pemasukan)
{
    //
    $Pemasukan = Pemasukan::all();
    return view('PencatatKeuangan.show', compact('Pemasukan'));

}
 
public function edit(Pemasukan $Pemasukan)
{
    //
    return view('PencatatKeuangan.edit',compact('Pemasukan'));
}

public function update(request $request, Pemasukan $Pemasukan)
{
    //
    $request->validate([
        'nama_pemasukan'=> 'required',
        'jumlah'=> 'required',
        'catatan'=> 'required',
        'tanggal'=> 'required',
        'kategori'=> 'required',
     ]);
     $Pemasukan->update($request->all());
     return redirect()->route('Pemasukan.index');
        
}


public function destroy(Pemasukan $Pemasukan)
{
    //
    $Pemasukan = Pemasukan::where('id',$Pemasukan->id)->delete();
    return redirect()->route('Pemasukan.index');
}
}