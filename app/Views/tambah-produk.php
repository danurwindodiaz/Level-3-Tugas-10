<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Level-3 - Tugas-10</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>Tambah Produk</h1>
                <a href="/"><small>Home</small></a>
            </div>
        </div>
        <form action="/insert" method="POST">
            <div class="row mt-3">
                <div class="col">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="nama_produk" placeholder="Masukkan nama produk" aria-label="Nama Produk">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="harga" placeholder="Masukkan harga produk" aria-label="Nama Produk">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="jumlah" placeholder="Masukkan jumlah produk" aria-label="Nama Produk">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="5" placeholder="Masukkan keterangan produk"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>