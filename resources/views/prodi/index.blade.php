@extends('layout.app')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Prodi</h1>
        <p class="mb-4">
            Daftar program studi yang tersedia pada sistem akademik.
        </p>

        <!-- Data Prodi -->
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">
                    Data Prodi
                </h6>

                <a href="/prodi/create" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i>
                    Tambah Prodi
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Prodi</th>
                                <th>Jurusan</th>
                                <th width="180">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($prodis as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->jurusan->nama_jurusan }}</td>
                                    <td>{{ $item->nama_prodi }}</td>
                                    <td>
                                        <a href="/prodi/{{ $item->id }}/edit" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="/prodi/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                            @endforeach
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

        </div>

    </div>
@endsection