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
        <form method="post" action="{{ route('buku.update', $buku->id) }}">
            @csrf
            @method('PUT') <!-- Method PUT untuk update data -->

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $buku->judul }}" required>
            </div>

            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="{{ $buku->penulis }}" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" value="{{ $buku->harga }}" required>
            </div>

            <div class="form-group">
                <label for="tgl_terbit">Tanggal Terbit</label>
                <input type="date" name="tgl_terbit" id="tgl_terbit" class="form-control" value="{{ $buku->tgl_terbit }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
