@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body ">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
                @else
                <div class="container">
                    @if(auth()->user()->level == 'admin')
                    <a href="{{ route('buku.create') }}" class="btn btn-primary float-end mt-5 mx-14 ml-3">Tambah Buku</a>
                    @endif
                </div>

                <!-- Form pencarian -->
                <form action="{{ route('buku.search') }}" method="get" class="mt-5">
                    @csrf
                    <input type="text" name="kata" class="form-control" placeholder="Cari ..." style="width: 30%; display: inline; float: right;">
                </form>

                <!-- Tabel Data Buku -->
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Harga</th>
                            <th>Tanggal Terbit</th>
                            @if(auth()->user()->level == 'admin')
                            <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_buku as $buku)
                        <tr>
                            <td>{{ $buku->id }}</td>
                            <td>
                                @if($buku->filepath)
                                <div class="relative h-10 w-10">
                                    <img class="h-full rounded-full object-cover object-center"
                                        src="{{ asset($buku->filepath) }}" alt="">
                                </div>
                                @endif
                            </td>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->penulis }}</td>
                            <td>{{ "Rp. " . number_format($buku->harga, 0, ',', '.') }}</td>
                            <td>{{ ($buku->tgl_terbit)->format('d-m-Y') }}</td>
                            @if(auth()->user()->level == 'admin')
                            <td>
                                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin mau dihapus?')" type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-warning mt-2">Edit</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Menampilkan jumlah total buku -->
                <p><strong>Jumlah Total Buku:</strong> {{ $total_buku }}</p>

                <!-- Menampilkan total harga semua buku -->
                <p><strong>Total Harga Semua Buku:</strong> {{ "Rp. " . number_format($total_harga, 2, ',', '.') }}</p>

                <!-- Pagination -->
                {{ $data_buku->links() }}

            </div>
            @endif
        </div>
    </div>
</div>
</div>

@endsection