<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\RencanaBudget;

class RencanaBudgetController extends Controller
{

public function index()

{
    //
    $RencanaBudget =RencanaBudget::all();
    return view('RencanaBudget.index', compact('RencanaBudget'));
}

public function create()
{
    //
    return view('RencanaBudget.create');
}

public function store(request $request, RencanaBudget $RencanaBudget)
 { //
     $request->validate([
        'nama'=> 'required',
        'jumlah'=> 'required',
        'event'=> 'required',
        'kategori'=> 'required',
     ]);
     $RencanaBudget = new RencanaBudget;
     
      $RencanaBudget->nama = $request->nama;
      $RencanaBudget->jumlah =$request->jumlah;
      $RencanaBudget->event =$request->event;
      $RencanaBudget->kategori =$request->kategori;
      $RencanaBudget->save();

      return redirect()->route('RencanaBudget.index');
    }
     
    public function show( RencanaBudget $RencanaBudget)
{
    //
    $RencanaBudge= RencanaBudget::all();
    return view('RencanaBudget.show', compact('RencanaBudget'));

}
 
public function edit(RencanaBudget $RencanaBudget)
{
    //
    return view('RencanaBudget.edit',compact('RencanaBudget'));
}

public function update(request $request, RencanaBudget $RencanaBudget)
{
    //
    $request->validate([
        'nama'=> 'required',
        'jumlah'=> 'required',
        'event'=> 'required',
        'kategori'=> 'required',
     ]);
     $RencanaBudget->update($request->all());
     return redirect()->route('RencanaBudget.index');
        
}


public function destroy(RencanaBudget $RencanaBudget)
{
    //
    $RencanaBudget = RencanaBudget::where('id',$RencanaBudget->id)->delete();
    return redirect()->route('RencanaBudget.index');
}
}