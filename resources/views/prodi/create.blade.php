@extends('layout.app')
@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Prodi</h1>

    <!-- Card -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Tambah Prodi
            </h6>
        </div>

        <div class="card-body">

            <form action="{{ route('prodi.index') }}" method="post">

                <div class="form-group">
                    <label>Nama Prodi</label>
                    <input type="text"
                           class="form-control"
                           name="nama_prodi"
                           placeholder="Masukkan Nama Prodi">
                </div>

                <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control" name="jurusan">
                        @foreach($jurusans as $jurusan)

                        <option value="{{ $jurusan->id }}">
                            {{ $jurusan->nama_jurusan }}
                        </option>

                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i>
                    Simpan
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

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Prodi</title>
</head>
<body>
    <h1>Tambah Prodi</h1>
    <form action="/prodi" method="POST">
        @csrf
        <div>
            <label>Jurusan</label>
            <select name="jurusan_id">
                @foreach($jurusans as $jurusan)

                <option value="{{ $jurusan->id }}">
                    {{ $jurusan->nama_jurusan }}
                </option>

                @endforeach
            </select>
        </div>
        <br>

        <div>
            <label>Nama Prodi</label>
            <input type="text" name="nama_prodi">
        </div>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>