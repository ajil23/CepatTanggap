<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .picture {
            height: 125px;
            width: 350px;
            display: block;
            margin-top: auto;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
        }

        .button {
            border-radius: 20px;
            border: 0;
            font-size: 1.8rem;
            font-weight: 600;
            margin: 1rem 0;
            padding: 2rem 3rem;
            white-space: nowrap;
            cursor: pointer;
        }

        .button--primary {
            background: #03DE74;
            color: white;
        }

        .button--primary:hover {
            background: #04bb63;
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

        @media screen and (min-width:1024px) {
            .button {
                font-size: 1.5rem;
            }
        }

        .footer__copy {
            text-align: center;
            font-size: .75rem;
            color: hsl(var(--hue), 4%, 55%);;
            margin: 5rem 0 1rem;
        }
    </style>
    <title>Pasien</title>
</head>
<div class="picture-container">
    <img class="picture" src="{{asset('backend/img/logo-2.png')}}" alt="CepatTanggap Logo">
</div>

<!-- Button trigger modal -->
<button type="button" class="button button--primary button--block" data-bs-toggle="modal" data-bs-target="#exampleModal">
   Panggil Ambulans
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Panggil Ambulans</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="user" method="POST" action="pesanAmbulans" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="input-group mb-3">
                    <select name="select" id="select" class="form-control form-control" name="namapasien">
                        <option value="">Nama Lengkap</option>
                        <option value="Laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select name="select" id="select" class="form-control form-control" name="keperluan">
                        <option value="">Keperluan</option>
                        <option value="Serangan Jantung">Serangan Jantung</option>
                        <option value="Bersalin">Bersalin</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="lokasi">
                </div>
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success">Kirim</button>
        </div>
      </div>
    </div>
  </div>

    {{-- <button type="button" class="btn btn--primary btn--block" id="ambu">
        Panggil Ambulans
    </button> --}}

<a href="#" >
    <button type="button" class="button button--primary button--block" onclick="reqnakes()">
        Panggil Nakes
    </button>
</a>
<a href="{{ route('profile.show') }}">
    <button type="button" class="button button--primary button--block">
        Pengaturan Profil
    </button>
</a>
<a href="logout">
    <button type="button" class="button button--secondary button--block">
        Logout
    </button>
</a>
<p class="footer__copy">&#169; Aone. All rigths reserved</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
{{-- new --}}

<input type="text" id="lokasi">
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

    // var ambulans = document.getElementById("ambu").addEventListener("click", reqambulans);
    // function reqambulans(){
    //     var loc = document.getElementById('lokasi');
    // }
    // $.ajax({
    //     type: 'POST',
    //     url '/pasien/ambustore',
    //     data: {
    //         _token: "{{csrf_token()}}",
    //         lokasi: lokasi
    //     },
    //     cache: false,
    //     success: function(respond){

    //     }
    // })

    function reqnakes(){
        alert("Test nakes ");
    }
</script>
{{-- new --}}

</body>

</html>