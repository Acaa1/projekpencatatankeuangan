<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\Hutang;
use App\Models\Piutang;
use App\Models\RencanaBudget;
use App\Models\DanaDarurat;
use App\Models\Laporan;

class PencatatKeuanganController extends Controller
{
    public function index()
 {

    $Pemasukan = Pemasukan::all();
    $Pengeluaran = Pengeluaran::all();
    $Hutang= Hutang::all();
    $Piutang = piutang::all();
    $RencanaBudget = RencanaBudget::all();
    $DanaDarurat = DanaDarurat::all();
    $Laporan::create($request->all());
    return view('PencatatKeuangan.table', compact('Pemasukan', 'Pengeluaran', 'Hutang', 'piutang', 'RencanaBudget','DanaDarurat','Laporan'));
}

public function create()
{
    return view('pencatatKeuangan.table');

}

public function store(Request $request)
{
    Pemasukan::create($request->all());
    Pengeluaran::create($request->all());
    Hutang::create($request->all());
    Piutang::create($request->all());
    RencanaBudget::create($request->all());
    DanaDarurat::create($request->all());
    Laporan::create($request->all());
    return redirect()->route('PencatatKeuangan.index');
    $PencatatKeuangan->save();

}

public function show(string $id)
{
    $Pemasukan= pemasukan::find($id);
    $Pengeluaran= Pengeluaran::find($id);
    $Hutang= Hutang::find($id);
    $Piutang= Piutang::find($id);
    $RencanaBudget= Rencanabudget::find($id);
    $DanaDarurat= Piutang::find($id);
    $Laporan= Piutang::find($id);


    return view('PencatatKeuangan.show', compact('Pemasukan', 'Pengeluaran', 'Hutang', 'piutang', 'RencanaBudget','DanaDarurat','Laporan'));
    
}
 
public function edit(string $id)
{
    $Pemasukan= pemasukan::find($id);
    $Pengeluaran= Pengeluaran::find($id);
    $Hutang= Hutang::find($id);
    $Piutang= Piutang::find($id);
    $RencanaBudget= Rencanabudget::find($id);
    $DanaDarurat= Piutang::find($id);
    $Laporan= Piutang::find($id);

    return view('PencatatKeuangan.show', compact('Pemasukan', 'Pengeluaran', 'Hutang', 'piutang', 'RencanaBudget','DanaDarurat','Laporan'));
}

public function update(Request $request, string $id)
{
    $Pemasukan = Pemasukan::find($id);
    $Pemasukan->update($request->all());
    $Pengeluaran = Pengeluaran::find($id);
    $Pengeluaran->update($request->all());
    $Hutang = Hutang::find($id);
    $Hutang->update($request->all());
    $Piutang = Piutang::find($id);
    $Piutang->update($request->all());
    $RencanaBudget = RencanaBudget::find($id);
    $RencanaBudget->update($request->all());
    $DanaDarurat = DanaDarurat::find($id);
    $DanaDarurat->update($request->all());
    $Laporan = Laporan::find($id);
    $Laporan->update($request->all());

        return redirect()->route('PemcatatKeuangan.index');
}

public function destroy(string $id)
{
    Pemasukan::destroy($id);
    Pengeluaran::destroy($id);
    Hutang::destroy($id);
    piutang::destroy($id);
    RencanaBudget::destroy($id);
    DanaDarurat::destroy($id);
    Laporan::destroy($id);

        return redirect()->route('PencatatKeuangan.index');

        return redirect()->route('PencatatKeuangan.index');

        return redirect()->route('PencatatKeuangan.index');
        return redirect()->route('PencatatKeuangan.index');

        return redirect()->route('PencatatKeuangan.index');
        return redirect()->route('PencatatKeuangan.index');

        return redirect()->route('PencatatKeuangan.index');
}
}