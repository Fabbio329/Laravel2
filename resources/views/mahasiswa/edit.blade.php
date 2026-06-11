@extends('layout.app')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Mahasiswa</h1>

    <!-- Card -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Ubah Mahasiswa
            </h6>
        </div>

        <div class="card-body">

            <form action="{{ route('mahasiswa.index', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

                <div class="form-group">
                    <label>NIM</label>
                    <input type="text"
                           class="form-control"
                           name="nim"
                           value="{{ $mahasiswa->nim }}">
                </div>

                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text"
                           class="form-control"
                           name="nama"
                           value="{{ $mahasiswa->nama }}">
                </div>

                <div class="form-group">
                    <label>Prodi</label>
                    <select class="form-control" name="prodi_id">
                        @foreach($prodis as $prodi)

                        <option value="{{ $prodi->id }}"
                            {{ $mahasiswa->prodi_id == $prodi->id ? 'selected':'' }}>
                            {{ $prodi->nama_prodi }}
                        </option>

                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control"
                              name="alamat"
                              rows="4"
                              value="{{ $mahasiswa->alamat }}">
                    </textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i>
                    Update
                </button>

                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>
@endsection