@extends('loyouts.master')

@push('css')

@endpush

@section('content')
            <div class="content-wrapper">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Piutang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('Piutang.update' , $Piutang->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="Nama">Nama:</label>
                    <input type="text" name="Nama" id="Nama" class="form-control @error('Nama') is-invalid @enderror"  placeholder="Masukkan Nama Piutang">
                  </div>
                  @error('Nama')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="jumlah">jumlah:</label>
                    <input type="text" name="jumlah" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" placeholder="Masukkan jumlah Piutang">
                  @error('jumlah')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="catatan">catatan:</label>
                    <input type="text" name="catatan" id="catatan" class="form-control @error('catatan') is-invalid @enderror" placeholder="Masukkan catatan Piutang">
                  @error('catatan')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_piutang">tgl_piutang:</label>
                    <input type="date" name="tgl_piutang" id="tgl_piutang" class="form-control @error('tgl_piutang') is-invalid @enderror" placeholder="Masukkan tgl_piutang">
                  @error('tgl_piutang')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_jthtempo">tgl_jthtempo:</label>
                    <input type="date" name="tgl_jthtempo" id="tgl_jthtempo" class="form-control @error('tgl_jthtempo') is-invalid @enderror" placeholder="Masukkan tgl_jthtempo">
                  @error('tgl_jthtempo')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('Piutang.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection