@extends('loyouts.master')

@push('css')

@endpush

@section('content')
            <div class="content-wrapper">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Pengeluaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('Pengeluaran.update' , $Pengeluaran->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="Nama">Nama:</label>
                    <input type="text" name="Nama" id="Nama" class="form-control @error('Nama') is-invalid @enderror"  placeholder="Masukkan Nama Pengeluaran">
                  </div>
                  @error('Nama')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="jumlah">jumlah:</label>
                    <input type="text" name="jumlah" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" placeholder="Masukkan jumlah Pengeluaran">
                  @error('jumlah')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="catatan">catatan:</label>
                    <input type="text" name="catatan" id="catatan" class="form-control @error('catatan') is-invalid @enderror" placeholder="Masukkan catatan Pengeluaran">
                  @error('catatan')
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
                  <a href="{{ route('Pengeluaran.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection