@extends('loyouts.master')
@section('title', 'Pemasukan')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pemasukan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pemasukan</li>
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
                            <h3 class="card-title">Form Pemasukan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('Pemasukan.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama Pemasukan">nama_Pemasukan</label>
                                    <input class="form-control" type="text" name="nama_Pemasukan" id="nama_Pemasukan" placeholder="Masukan nama Pemasukan">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah</label>
                                    <input class="form-control" type="text" name="jumlah" id="jumlah" placeholder="Masukan jumlah Pemasukan">
                                </div>
                                <div class="form-group">
                                    <label for="catatan">catatan</label>
                                    <input class="form-control" type="text" name="catatan" id="catatan" placeholder="Masukan catatan Pemasukan">
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal" name="Tanggal" id="Tanggal">Tanggal</label>
                                    <input class="form-control" type="date" name="tanggal" id="Tanggal" placeholder="Masukan Tangal Pemasukan">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="kategori" name="kategori" id="kategori">kategori</label>
                                    <input class="form-control" type="text" name="kategori" id="kategori" placeholder="Masukan kategori Pemasukan">
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