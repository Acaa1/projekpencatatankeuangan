@extends('loyouts.master')
@section('title', 'Detail Pemasukan')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Pemasukan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Pemasukan</a></li>
                        <li class="breadcrumb-item active">Detail Pemasukan</li>
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
                            <h3 class="card-title">Detail Pemasukan : {{ $Pemasukan[0]->nama }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama_Pemasukan">Nama_Pemasukan</label>
                                    <input type="text" class="form-control" name="Nama_Pemasukan" id="Nama_Pemasukan" placeholder="Masukkan Nama Pemasukan" value="{{ $Pemasukan[0]->Nama_Pemasukan }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="catatan">catatan</label>
                                    <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Masukan catatan Pemasukan" value="{{ $Pemasukan[0]->catatan }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah</label>
                                    <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Masukan jumlah Pemasukan" value="{{ $Pemasukan[0]->jumlah}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukan kategori Pemasukan" value="{{ $Pemasukan[0]->tanggal}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="kategori">kategori</label>
                                    <input type="date" class="form-control" name="kategori" id="kategori" placeholder="Masukan kategori Pemasukan" value="{{ $Pemasukan[0]->kategori }}" disabled>
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