@extends('layout.app')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Prodi</h1>

    <!-- Card -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Ubah Prodi
            </h6>
        </div>

        <div class="card-body">

            <form action="{{ route('prodi.index',$prodi->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Nama Prodi</label>
                    <input type="text"
                           class="form-control"
                           name="nama_prodi"
                           value="{{ $prodi->nama_prodi }}">
                </div>

                <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control" name="jurusan">
                        @foreach($jurusans as $jurusan)

                        <option value="{{ $jurusan->id }}"
                            {{ $prodi->jurusan_id == $jurusan->id ? 'selected':'' }}>
                            {{ $jurusan->nama_jurusan }}
                        </option>

                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i>
                    Update
                </button>

                <a href="{{ route('prodi.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>
@endsection