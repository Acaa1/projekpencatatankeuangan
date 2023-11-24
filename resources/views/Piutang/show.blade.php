@extends('loyouts.master')
@section('title', 'Detail Piutang')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Piutang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Piutang</a></li>
                        <li class="breadcrumb-item active">Detail Piutang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detail Piutang : {{ $Piutang[0]->nama }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama Piutang" value="{{ $Piutang[0]->nama }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah</label>
                                    <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Masukan jumlah Piutang" value="{{ $Piutang[0]->jumlah }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="catatan">catatan</label>
                                    <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Masukan catatan Piutang" value="{{ $Piutang[0]->catatan }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_piutang">tgl_piutang</label>
                                    <input type="date" class="form-control" name="tgl_piutang" id="tgl_piutang" placeholder="Masukan tgl_jthtempo Piutang" value="{{ $Piutang[0]->tgl_piutang}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_jthtempo">tgl_jthtempo</label>
                                    <input type="date" class="form-control" name="tgl_jthtempo" id="tgl_jthtempo" placeholder="Masukan tgl_jthtempo Piutang" value="{{ $Piutang[0]->tgl_jthtempo }}" disabled>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                            </div>
                            <!-- /.content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection