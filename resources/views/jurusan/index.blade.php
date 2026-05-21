<!DOCTYPE html>
<html>
<head>
    <title>Data Jurusan</title>
</head>
<body>
    <h1>Data Jurusan</h1>
    <a href="/jurusan/create">Tambah Jurusan</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Aksi</th>
        </tr>

        @foreach($jurusans as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_jurusan }}</td>
            <td>
                <a href="/jurusan/{{ $item->id }}/edit">
                    Edit
                </a>

                <form action="/jurusan/{{ $item->id }}"
                      method="POST">

                    @csrf 
                    @method('DELETE')

                    <button type="submit">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>