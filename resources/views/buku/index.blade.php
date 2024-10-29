<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   
    <div class="container">
        @if (Session::has('pesan'))
            <div class="alert alert-success">{{Session::get('pesan')}}</div>
        @endif

        <form action="{{ route('logout') }}" method="POST" class="float-end mt-5">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>

    <a href="{{route('buku.create')}}" class="btn btn-primary float mt-5">Tambah Buku</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp. " . number_format($buku->harga, 0, ',', '.') }}</td>
                <td>{{ ($buku->tgl_terbit)->format('d-m-Y') }}</td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin mau dihapus?')" type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                    <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-warning mt-2">Edit</a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Menampilkan jumlah total buku -->
    <p><strong>Jumlah Total Buku:</strong> {{ $total_buku }}</p>

    <!-- Menampilkan total harga semua buku -->
    <p><strong>Total Harga Semua Buku:</strong> {{ "Rp. " . number_format($total_harga, 2, ',', '.') }}</p>

    <!-- Pagination -->
    {{$data_buku->links()}}
    </div>
   

</body>
</html>
