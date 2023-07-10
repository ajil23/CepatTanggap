<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>CepatTanggap</title>
  <style>
    body {
      background: url({{ asset('backend/img/bg-4.jpg') }}) no-repeat;
      background-size: cover;
      display: grid;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      width: 30rem;
      height: 20rem;
      box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);
      border-radius: 5px;
      background-color: rgba(255, 255, 255, .15);

      backdrop-filter: blur(5px);
    }

    .card {
      width: 360px;
      height: min-content;
      padding: 20px;
      border-radius: 12px;
      background: #fff;
    }

    .card h1 {
      font-size: 26px;
      margin-bottom: 12px;
    }

    .button {
      border-radius: 10px;
      border: 0;
      font-size: 1rem;
      font-weight: 600;
      margin: 5px 0;
      white-space: nowrap;
      cursor: pointer;
    }

    .button--success {
      background: #4ADA93;
      color: white;
    }

    .button--success:hover {
      background: #37AB72;
    }

    .button--secondary {
    background: #de0333;
    color: white;
    }

    .button--secondary:hover {
     background: #bb0413;
    }

    .button--block {
      width: 100%;
      display: inline-block;
    }

    .img-ambu{
      margin-left: -65px;
      height: 26%;
      width: 26%;
    }

    .img-nakes{
      margin-left: -90px;
      height: 26%;
      width: 26%;
    }

    .img-prof{
      margin-left: -160px;
      height: 26%;
      width: 26%;
    }
  </style>
</head>

<body>
  <div class="card">
  @include('sweetalert::alert')
    <h1>CepatTanggap</h1>

    {{-- panggil nakes --}}
    <a href="{{route('panakes.index')}}">
      <button type="button" class="button button--success button--block">
        <img class="img-nakes" src="{{ asset('backend/img/medical-2.png') }}" alt="">
        Panggil Bantuan
      </button>
    </a>
   
    {{-- panggil ambulans --}}
    <a href="{{route('pambulan.index')}}">
      <button type="button" class="button button--success button--block">
        <img class="img-ambu" src="{{ asset('backend/img/call-2.png') }}" alt="">
        Panggil Ambulans
      </button>
    </a>

    {{-- profile pengguna --}}
    <a href="{{route('papasien.index')}}">
    <button type="button" class="button button--success button--block">
      <img class="img-prof" src="{{ asset('backend/img/profile-2.png') }}" alt="">
      Profil 
    </button>

    {{-- logout --}}
    <a href="logout">
     <button type="button" class="button button--secondary button--block">
     <img class="img-prof" src="{{ asset('backend/img/logout-2.png') }}" alt="">
        Logout 
    </button>
    </a>

    

  </div>
  

  {{-- script --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <script>
        var lokasi = document.getElementById('lokasi');
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        }
    
        function successCallback(position){
            lokasi.value= position.coords.latitude + "," + position.coords.longitude;
        }
    
        function errorCallback(position){
    
        }
    </script>

    


</body>

</html>