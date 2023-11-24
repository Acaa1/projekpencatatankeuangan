@extends('loyouts.master')
@section('title', 'RencanaBudget')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">RencanaBudget</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">RencanaBudget</li>
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
                            <h3 class="card-title">Form RencanaBudget</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('RencanaBudget.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukan nama RencanaBudget">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah</label>
                                    <input class="form-control" type="text" name="jumlah" id="jumlah" placeholder="Masukan jumlah RencanaBudget">
                                </div>
                                <div class="form-group">
                                    <label for="event">event</label>
                                    <input class="form-control" type="text" name="event" id="event" placeholder="Masukan event RencanaBudget">
                                </div>
                                <div class="form-group">
                                    <label for="" name="kategori" id="kategori">kategori</label>
                                    <input class="form-control" type="text" name="kategori" id="kategori" placeholder="Masukan kategori">
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