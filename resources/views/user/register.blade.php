<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="bg-body-secondary">
    @isset($result)
        {{ var_dump($result) }}
    @endisset
    <div class="container w-50">
        <div class="card ps-4 pe-4">
            <h1 class="header">Sistem Register</h1>
            @if(isset($message))
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <div class="alert">{{ $message }}</div>
                @if(isset($status) && $status !== null)
                    <a href="{{ route('login.login') }}">Go to Login</a>
                @endif
            </div>
            @endif
            <div class="mb-3 mt-2">
                <form action="{{ route('register.submit') }}" method="post">
                    <label for="" class="form-label ">Username</label>  
                    @csrf
                    <input type="text" class="form-control mb-2" name="username" id="" placeholder="" required>
                    <label for="" class="form-label ">Email</label>  
                    @csrf
                    <input type="email" class="form-control mb-2" name="email" id="" placeholder="" required>
                    <label for="" class="form-label ">Password</label>
                    @csrf
                    <input type="password" class="form-control mb-3" name="password" id="" placeholder="" required>
                    <input type="submit" class="btn btn-primary mt-3" value="Register"></input>
                </form>
                <p class="text-center mt-5 mb-1 fs-6">Sistem Antrian DJP Pajak</p>
                <p class="text-center mb-0 fs-6 text-muted">Direktorat Jenderal Pajak © 2023</p>
            </div>
        </div>
    </div>
</body>

</html>