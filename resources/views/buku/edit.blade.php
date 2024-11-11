<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        @if (Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if (count($errors)>0)
        <ul class="alert alert-danger">
            @foreach ($errors -> all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

        <h4>Edit Buku</h4>
        <form method="POST" action="{{ route('buku.update', $buku->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input fields for buku details (judul, penulis, harga, tanggal terbit, thumbnail) -->
            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" name="judul" value="{{ $buku->judul }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" value="{{ $buku->penulis }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" value="{{ $buku->harga }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tgl_terbit">Tanggal Terbit</label>
                <input type="date" name="tgl_terbit" value="{{ $buku->tgl_terbit }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control">
                @if($buku->filepath)
                <img src="{{ asset($buku->filepath) }}" alt="Thumbnail" width="150">
                @endif
            </div>

            <!-- Displaying existing gallery images -->
            <div class="form-group">
                <label>Gallery</label>
                <div class="gallery-display">
                    @foreach($buku->galleries as $gallery)
                    <div class="gallery-item" style="display: inline-block; margin: 5px;">
                        <img src="{{ asset($gallery->path) }}" alt="Gallery Image" width="150">
                        <form method="POST" action="{{ route('gallery.destroy', $gallery->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Input for adding more gallery images -->
            <div class="form-group">
                <label for="gallery">Tambah Gambar ke Galeri</label>
                <input type="file" name="gallery[]" class="form-control" multiple>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="{{ route('buku.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </form>

    </div>
</body>

</html>