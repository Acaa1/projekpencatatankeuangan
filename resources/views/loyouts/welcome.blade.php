@extends('loyouts.master')
@section('title','dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Welcome</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
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
                <!-- /.col-md-6 -->
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Pemasukan</span>
                        <a class="btn btn-warning" href="/Pemasukan">Tekan Disini</a>
                    </div>
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Data Pengeluaran</span>
                            <a class="btn btn-warning" href="/Pengeluaran">Tekan Disini</a>
                        </div>
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Data Hutang</span>
                            <a class="btn btn-warning" href="/Hutang">Tekan Disini</a>
                        </div>
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Data Piutang</span>
                            <a class="btn btn-warning" href="/Piutang">Tekan Disini</a>
                        </div>
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Data RencanaBudget</span>
                            <a class="btn btn-warning" href="/RencanaBudget">Tekan Disini</a>
                          </div>
                          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Data DanaDarurat</span>
                            <a class="btn btn-warning" href="/DanaDarurat">Tekan Disini</a>
                        </div> 
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                        </div> 
                <form action="{{ route('auth.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link btn btn-warning">Logout</button>
                            </form>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection