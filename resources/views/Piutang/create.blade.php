@extends('loyouts.master')
@section('title', 'Piutang')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Piutang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Piutang</li>
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
                            <h3 class="card-title">Form Piutang</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('Piutang.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukan nama Piutang">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah</label>
                                    <input class="form-control" type="text" name="jumlah" id="jumlah" placeholder="Masukan jumlah Piutang">
                                </div>
                                <div class="form-group">
                                    <label for="catatan">catatan</label>
                                    <input class="form-control" type="text" name="catatan" id="catatan" placeholder="Masukan catatan Piutang">
                                </div>
                                <div class="form-group">
                                    <label for="" name="tgl_piutang" id="tgl_piutang">tgl_Piutang</label>
                                    <input class="form-control" type="date" name="tgl_piutang" id="tgl_piutang" placeholder="Masukan tgl_piutang">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_jthtempo" name="tgl_jthtempo" id="tgl_jthtempo">tgl_jthtempo</label>
                                    <input class="form-control" type="date" name="tgl_jthtempo" id="tgl_jthtempo" placeholder="Masukan tgl_jthtempo">
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