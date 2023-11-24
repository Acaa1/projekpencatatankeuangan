@extends('loyouts.master')
@section('title', 'Pengeluaran')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengeluaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pengeluaran</li>
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
                            <h3 class="card-title">Form Pengeluaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('Pengeluaran.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukan nama Pengeluaran">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah</label>
                                    <input class="form-control" type="text" name="jumlah" id="jumlah" placeholder="Masukan jumlah Pengeluaran">
                                </div>
                                <div class="form-group">
                                    <label for="catatan">catatan</label>
                                    <input class="form-control" type="text" name="catatan" id="catatan" placeholder="Masukan catatan Pengeluaran">
                                </div>
                                <div class="form-group">
                                    <label for="" name="tanggal" id="tanggal">tanggal</label>
                                    <input class="form-control" type="date" name="tanggal" id="tanggal" placeholder="Masukan tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="Kategori" name="Kategori" id="Kategori">Kategori</label>
                                    <input class="form-control" type="text" name="Kategori" id="Kategori" placeholder="Masukan Kategori">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection