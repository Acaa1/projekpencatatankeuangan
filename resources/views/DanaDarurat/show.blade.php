@extends('loyouts.master')
@section('title', 'Detail DanaDarurat')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail DanaDarurat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">DanaDarurat</a></li>
                        <li class="breadcrumb-item active">Detail DanaDarurat</li>
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
                            <h3 class="card-title">Detail DanaDarurat : {{ $DanaDarurat[0]->nama }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Masukkan Nama DanaDarurat" value="{{ $DanaDarurat[0]->Nama }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="catatan">catatan</label>
                                    <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Masukan catatan DanaDarurat" value="{{ $DanaDarurat[0]->catatan }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah</label>
                                    <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Masukan jumlah DanaDarurat" value="{{ $DanaDarurat[0]->jumlah }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal">Tanggal</label>
                                    <input type="text" class="form-control" name="Tanggal" id="Tanggal" placeholder="Masukan Tanggal DanaDarurat" value="{{ $DanaDarurat[0]->Tanggal }}" disabled>
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