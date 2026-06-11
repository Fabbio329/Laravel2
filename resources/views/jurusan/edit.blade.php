@extends('layout.app')
@section('content')

    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Ubah Jurusan</h1>

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Form Ubah Jurusan
                </h6>
            </div>

            <div class="card-body">

                <form action="{{ route('jurusan.index', $jurusan->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Nama Jurusan</label>
                        <input type="text" class="form-control" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i>
                        Update
                    </button>

                    <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i>
                        Kembali
                    </a>

                </form>

            </div>

        </div>

    </div>

@endsection