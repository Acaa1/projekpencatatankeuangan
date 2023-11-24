@extends('loyouts.master')
@section('title', 'DanaDarurat')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DanaDarurat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DanaDarurat</li>
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
                            <h3 class="card-title">Form DanaDarurat</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('DanaDarurat.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" id="Nama" placeholder="Masukan Nama DanaDarurat">
                                </div>
                                <div class="form-group">
                                    <label for="Catatan">Catatan</label>
                                    <input class="form-control" type="text" name="catatan" id="Catatan" placeholder="Masukan Catatan DanaDarurat">
                                </div>
                                <div class="form-group">
                                    <label for="Jumlah">Jumlah</label>
                                    <input class="form-control" type="number" name="jumlah" id="Jumlah" placeholder="Masukan Jumlah DanaDarurat">
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal" name="Tanggal" id="Tanggal">Tanggal</label>
                                    <input class="form-control" type="date" name="tanggal" id="Tanggal" placeholder="Masukan Tangal">
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