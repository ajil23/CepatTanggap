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
  <h1>Minta Bantuan</h1>
  <form method="POST" action="{{route('panakes.store')}}" enctype="multipart/form-data">
    @csrf
        <div class="form-group row">
            <div class="input-group mb-3">
                <select name="kep" id="select" class="form-control form-control" name="kep" required>
                    <option value="">-- Jenis Bantuan --</option>
                    <option value="Obat-obatan">Obat-obatan </option>
                    <option value="Tabung Oksigen ">Tabung Oksigen</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="lokasiku" name="lokasi">
            </div>
        </div>
        <a href="redirects">
          <button type="button" class="btn btn-secondary">Batal</button>
        </a>
        <button type="submit" class="btn btn-success" >Kirim</button>
    </div>
</form>
</div>
    
<script>
  var lokasi = document.getElementById('lokasiku');
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