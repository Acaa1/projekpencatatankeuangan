@extends('loyouts.master')
@section('title', 'Detail RencanaBudget')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail RencanaBudget</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">RencanaBudget</a></li>
                        <li class="breadcrumb-item active">Detail RencanaBudget</li>
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
                            <h3 class="card-title">Detail RencanaBudget : {{ $RencanaBudget->nama }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama RencanaBudget" value="{{ $RencanaBudget->nama }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah</label>
                                    <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Masukan jumlah RencanaBudget" value="{{ $RencanaBudget->jumlah }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="event">event</label>
                                    <input type="text" class="form-control" name="event" id="event" placeholder="Masukan event RencanaBudget" value="{{ $RencanaBudget->event }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="kategori">kategori</label>
                                    <input type="date" class="form-control" name="kategori" id="kategori" placeholder="Masukan tgl_jthtempo RencanaBudget" value="{{ $RencanaBudget->kategori}}" disabled>
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