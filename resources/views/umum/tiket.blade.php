<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Buka Tiket Antri</title>
</head>
<body class="bg-body-secondary">
    <div class="container w-50">
        <div class="card ps-4 pe-4">
            <h1 class="display-5">Buat Tiket Baru</h1>
            <div class="mb-3 mt-2">
                <form action="{{ route('tiket.submit') }}" method="post">
                    <label for="" class="form-label ">NIK</label>
                    @csrf
                    <input type="text" class="form-control" name="nik" id="nik" placeholder="">
                    <label for="" class="form-label ">Nama Lengkap</label>
                    @csrf
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="">
                    <label for="" class="form-label ">Email</label>
                    @csrf
                    <input type="email" class="form-control" name="email" id="email" placeholder="">
                    <label for="" class="form-label ">No HP</label>
                    @csrf
                    <input type="tel" class="form-control" name="no-hp" id="no-hp" placeholder="">
                    <label for="" class="form-label ">Keperluan</label>
                    <select class="form-select form-select-lg" name="keperluan" id="keperluan">
                        <option selected>Select one</option>
                        <option value="Pembuatan NPWP Pribadi Baru">Pembuatan NPWP Pribadi Baru</option>
                        <option value="Pembuatan NPWP Perorangan Baru">Pembuatan NPWP Perorangan Baru</option>
                        <option value="Cetak Kartu NPWP Baru">Cetak Kartu NPWP Baru</option>
                        <option value="Pembayaran Pajak eSPT">Pembayaran Pajak eSPT</option>
                        <option value="Lainnya">Lainnya</option>
        
                    </select>
                    <input type="submit" class="btn btn-primary mt-3" value="Buat Tiket Baru"></input>
                </form>
            </div>
        </div>
    </div>
</body>
</html>