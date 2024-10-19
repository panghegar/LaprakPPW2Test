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

    @if(count($data_buku))
    <div class="alert alert-success mt-5">
        Ditemukan <strong>{{ count($data_buku) }}</strong> data dengan kata: <strong>{{ $cari }}</strong>
    </div>
    @else
        <div class="alert alert-warnin" ><h4>Data {{ $cari }} tidak ditemukan</h4>
        <a href="/buku" class="btn btn-warning">Kembali</a></div>
    @endif

     @if (Session::has('pesan_sukses'))
        <div class="alert alert-success">{{Session::get('pesan_sukses')}}</div>
    @endif
    <a href="{{route('buku.create')}}" class="btn btn-primary float-end mt-5 mx-14">Tambah Buku</a>
    <form action="{{ route('buku.search') }}" method="get">
        @csrf
        <input type="text" name="kata" class="form-control mt-5 mr-3" placeholder="Cari ..." style="width: 30%; display: inline; margin-top: 10px; margin-bottom: 10px; float: right;">
    </form>

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
