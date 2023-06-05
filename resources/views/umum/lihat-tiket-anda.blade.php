<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Tiket Anda</title>
</head>
<body>
    <div class="container w-50">
        <div class="card ps-4 pe-4">
            <h1 class="header">Lihat Antrian Anda</h1>
            <div class="mb-3 mt-2">
                <form action="{{ route('tiket.showTiket') }}" method="get">
                    <label for="" class="form-label ">Nomor Tiket</label>
                    <input type="text" class="form-control mb-2" name="tiketId" id="" placeholder="">
                    <input type="submit" class="btn btn-primary mt-3" value="Lihat Tiket Anda"></input>
                </form>
            </div>
        </div>
    </div>
    <div class="card text-bg-light p-3 mx-auto mt-4" style="width: 18rem;">
        <div class="card-body align-items-center">
            @if ($status != null)
                <h5 class="card-title text-center">Nomor Antrian Anda</h5>
                <h2 class="card-subtitle text-center"><b>{{ $idTiket }}</b></h2>
                <h5 class="card-title text-center mt-4">Status Anda</h5>
                <h2 class="card-subtitle text-center fs-4"><b>{{ $status }}</b></h2>
            @else
                <h5 class="card-title text-center">Data Tidak Ditemukan</h5>
            @endif
            <a href="{{ route('tiket.formAntri') }}">
                <button type="button" class="btn btn-lg btn-primary w-100 mt-4">Buat Antrian Baru</button>
            </a>
        </div>
    </div>
</body>
</html>