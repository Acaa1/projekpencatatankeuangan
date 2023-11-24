@extends('loyouts.master')
@section('title', 'Hutang')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hutang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Hutang</li>
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
                            <h3 class="card-title">Form Hutang</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('Hutang.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" id="Nama" placeholder="Masukan Nama Hutang">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah</label>
                                    <input class="form-control" type="text" name="jumlah" id="jumlah" placeholder="Masukan jumlah Hutang">
                                </div>
                                <div class="form-group">
                                    <label for="catatan">catatan</label>
                                    <input class="form-control" type="text" name="catatan" id="catatan" placeholder="Masukan catatan Hutang">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_hutang" name="tgl_hutang" id="tgl_hutang">tgl_hutang</label>
                                    <input class="form-control" type="date" name="tgl_hutang" id="tgl_hutang" placeholder="Masukan Tgl_Hutang">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_jthtempo" name="tgl_jthtempo" id="tgl_jthtempo">tgl_jthtempo</label>
                                    <input class="form-control" type="date" name="tgl_jthtempo" id="tgl_jthtempo" placeholder="Masukan Tgl_jthtenpo">
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