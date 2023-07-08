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
  <h1>Data Diri Pasien</h1>
  <form method="POST" action="{{route('papasien.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="form-group row">
          <div class="input-group mb-3">
            <input type="text" name="name" placeholder="Nama" class="form-control" required data-validation-required-message="This field is required"> 
          </div>
          <div class="input-group mb-3">
            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required data-validation-required-message="This field is required"> 
          </div>
          <div class="input-group mb-3">
            <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" required data-validation-required-message="This field is required"> 
          </div>
          <div class="input-group mb-3">
            <input type="text" name="umur" placeholder="Umur" class="form-control" required data-validation-required-message="This field is required"> 
          </div>
          <div class="input-group mb-3">
            <input type="text" name="riwayat_penyakit" placeholder="Riwayat Penyakit" class="form-control" required data-validation-required-message="This field is required"> 
          </div>
          <div class="input-group mb-3">
            <input type="text" name="alamat" placeholder="Alamat" class="form-control" required data-validation-required-message="This field is required"> 
          </div>
          </div>
            <a href="redirects" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success" >Simpan</button>
          </div>
        </div>
    </div>
    
</form>
</div>
        <!-- <div class="form-group mb-3 row">
          <div class="input-group">
									
								
								<div class="form-group">
									<h5>Tempat Lahir</h5>
									<div class="controls">
										<input type="text" name="tempat_lahir" class="form-control" required data-validation-required-message="This field is required"> </div>
								</div>
								<div class="form-group">
									<h5>Tanggal Lahir</h5>
									<div class="controls">
										<input type="date" name="tanggal_lahir" class="form-control" required data-validation-required-message="This field is required"> </div>
								</div>
								<div class="form-group">
									<h5>Umur</h5>
									<div class="controls">
										<input type="text" name="umur" class="form-control" required data-validation-required-message="This field is required"> </div>
								</div>
								<div class="form-group">
									<h5>Riwayat Penyakit</h5>
									<div class="controls">
										<input type="text" name="riwayat_penyakit" class="form-control" required data-validation-required-message="This field is required"> </div>
								</div>
								<div class="form-group">
									<h5>Alamat</h5>
									<div class="controls">
										<input type="text" name="alamat" class="form-control" required data-validation-required-message="This field is required"> </div>
								</div>
            </div>
        
</form>
</div> -->
    

</body>

</html>