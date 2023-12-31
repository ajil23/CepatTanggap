<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('app.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Pasien</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <form class="user">
                                    <div class="form-group">
                                        <x-label for="name" value="{{ __('Nama') }}" />
                                        <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </div>
                                    <div class="form-group">
                                        <x-label for="tgl_lahir" value="{{ __('Tanggal Lahir') }}" />
                                        <x-input id="tgl_lahir" class="form-control" type="date" name="tgl_lahir" :value="old('tgl_lahir')" required autofocus autocomplete="tgl_lahir" />
                                    </div>
                                    <div class="form-group">
                                        <x-label for="riwayat" value="{{ __('Riwayat Penyakit') }}" />
                                        <x-input id="riwayat" class="form-control" type="text" name="riwayat" :value="old('riwayat')" required autofocus autocomplete="riwayat" />
                                    </div>
                                    <div class="form-group">
                                        <x-label for="alamat" value="{{ __('Alamat') }}" />
                                        <x-input id="alamat" class="form-control" type="text" name="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" />
                                    </div>
                                    <div class="form-group">
                                        <x-label for="email" value="{{ __('Email') }}" />
                                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <x-label for="password" value="{{ __('Kata Sandi') }}" />
                                            <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                        </div>
                                        <div class="col-sm-6">
                                            <x-label for="password_confirmation" value="{{ __('Ulangi Kata Sandi') }}" />
                                            <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Daftar
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Sudah Punya Akun? Masuk!</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center my-auto">
            <span style="color:white;">&copy; Aone. All rigths reserved</span>
        </div>
        

    </div>

    <script src="{{ asset('/sw.js') }}"></script>
        <script>
            if (!navigator.serviceWorker.controller) {
                navigator.serviceWorker.register("/sw.js").then(function (reg) {
                    console.log("Service worker has been registered for scope: " + reg.scope);
                });
            }
        </script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/js/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>

</body>

</html>