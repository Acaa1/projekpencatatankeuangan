@extends('loyouts.master')

@push('css')

@endpush

@section('content')
            <div class="content-wrapper">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data RencanaBudget</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('RencanaBudget.update' , $RencanaBudget->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">nama:</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"  placeholder="Masukkan nama RencanaBudget">
                  </div>
                  @error('nama')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="jumlah">jumlah:</label>
                    <input type="text" name="jumlah" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" placeholder="Masukkan jumlah RencanaBudget">
                  @error('jumlah')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="event">event:</label>
                    <input type="text" name="event" id="event" class="form-control @error('event') is-invalid @enderror" placeholder="Masukkan event RencanaBudget">
                  @error('event')
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
                  <a href="{{ route('RencanaBudget.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection