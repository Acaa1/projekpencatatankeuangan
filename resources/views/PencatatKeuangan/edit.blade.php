@extends('loyouts.master')

@push('css')

@endpush

@section('content')
            <div class="content-wrapper">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Pemasukan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('Pemasukan.update' , $Pemasukan->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="Nama Pemasukan">nama_pemasukan:</label>
                    <input type="text" name="nama_pemasukan" id="nama_pemasukan" class="form-control @error('nama_pemasukan') is-invalid @enderror"  placeholder="Masukkan Nama Pemasukan">
                  </div>
                  @error('nama_Pemasukan')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="jumlah">jumlah:</label>
                    <input type="text" name="jumlah" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" placeholder="Masukkan jumlah Pemasukan">
                  @error('jumlah')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="catatan">catatan:</label>
                    <input type="text" name="catatan" id="catatan" class="form-control @error('catatan') is-invalid @enderror" placeholder="Masukkan catatan Pemasukan">
                  @error('jumlah')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">tanggal:</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" placeholder="Masukkan tanggal">
                  @error('tanggal')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="kategori">kategori:</label>
                    <input type="date" name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror" placeholder="Masukkan kategori">
                  @error('kategori')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('Pemasukan.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection