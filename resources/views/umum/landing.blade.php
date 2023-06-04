<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="icon" href="/public/img/djp.ico" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Direktorat Jendral Pajak</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand text-light" href="#">
                <img src="{{ asset('/img/LogoDJP11.png'); }}" alt="DJP Logo" width="120" height="40">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kita </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></button>
            <button type="button" data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></button>
            <button type="button" data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></button>
        </div>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('/img/NPWPElektronik_1.png'); }}" class="w-100 d-block" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img/eduksai 2023.jpg') }}" class="w-100 d-block" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img/Survei DJP 2022 Banner_0.jpg') }}" class="w-100 d-block" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div style="background-color: white; padding-top: 20px; margin-bottom: 5px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ms-auto me-auto">
                    <a href="{{ route('login.login') }}">
                        <img src="{{ asset('/img/Login Sekarang.png') }}" alt="Login" srcset="" style="width: 100%; margin-bottom: 20px;">
                    </a>
                </div>
                <div class="col-md-4 ms-auto me-auto">
                    <a href="{{ route('tiket.formAntri') }}">
                        <img src="{{ asset('/img/Antrian Digital.png') }}" alt="Antrian" srcset="" style="width: 100%; margin-bottom: 20px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>