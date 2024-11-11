<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container-lg">
        @if (count($errors)>0)
        <ul class="alert alert-danger">
            @foreach ($errors -> all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

        <h4>Tambah Buku</h4>
        <form method="post" action="{{ route('buku.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tgl_terbit">Tanggal Terbit</label>
                <input type="date" name="tgl_terbit" id="tgl_terbit" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="thumbnail">Pilih sampul buku</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" required>
            </div>

            <div class="col-span-full mt-5">
                <label for="gallery" class="block text-sm font-medium leading-6 text-gray-900">Gallery</label>
                <div class="mt-2" id="fileinput_wrapper">
                </div>
                <button class="btn btn-primary">
                    <a id="tambah" onclick="addFileInput()">Tambah Input data</a>
                </button>

                <script type="text/javascript">
                    function addFileInput() {
                        var div = document.getElementById('fileinput_wrapper');
                        div.innerHTML += '<input type="file" name="gallery[]" id="gallery" class="block w-full mb-5" style="margin-bottom:5px;">';
                    };
                </script>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="{{ route('buku.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </form>

    </div>


</body>

</html>