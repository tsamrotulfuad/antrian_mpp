<!DOCTYPE html>
<html data-bs-theme="dark">
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark"> -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Antrian MPP</title>
    </head>
    <body>
    <section id="header">
        <nav class="navbar navbar-expand-lg" style="background-color:darkorange" aria-label="Ninth navbar example">
            <div class="container-xl">
              <a class="navbar-brand" href="#">Kota Pasuruan</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarsExample07XL">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Antrian</a>
                  </li>
                  
                </ul>
              </div>
            </div>
        </nav>
    </section>
    <section id="heroes">
        <div class="px-4 py-4 my-4 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('logo/kotapasuruan.png')}}" alt="" width="110" height="135">
            <h1 class="display-6 fw-bold">MAL PELAYANAN PUBLIK</h1>
            <h5>KOTA PASURUAN</h5>
        </div>
    </section>
    <section id="button_opd">
      <div class="container text-center">
        <div class="d-grid gap-2">
          <div class="row row-cols-5 row-gap-2 column-gap-2 justify-content-md-center">
            <button class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#dpmptsp" type="button">DPMPTSP</button>
            <button class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#dpupr" type="button">DPUPR</button>
            <button class="btn btn-warning btn-lg" type="button">Button</button>
            <button class="btn btn-warning btn-lg" type="button">Button</button>
            <button class="btn btn-warning btn-lg" type="button">Button</button>
            <button class="btn btn-warning btn-lg" type="button">Button</button>
            <button class="btn btn-warning btn-lg" type="button">Button</button>
            <button class="btn btn-warning btn-lg" type="button">Button</button>
            <button class="btn btn-warning btn-lg" type="button">Button</button>
            <button class="btn btn-warning btn-lg" type="button">Button</button>
            <button class="btn btn-warning btn-lg" type="button">Button</button>
            <button class="btn btn-warning btn-lg" type="button">Button</button>
            
          </div>
        </div>
      </div>
    </section>

    <!-- modal -->
    <div class="modal fade" id="dpmptsp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-center" id="dpmptspLabel">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</h1>
          </div>
          <div class="modal-body text-center">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">No. Antrian</label>
              <input type="text" class="form-control" id="no_antrian" value="{{ $no_dpmptsp }}" style="text-align: center; border:0;outline:0;" readonly>
              
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Waktu</label>
              <p>{{ $tanggal }}</p>
            </div>
            
            
          </div>
          <div class="modal-footer justify-content-md-center">
            <button type="button" class="btn btn-warning" id="store">Cetak Antrian</button>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script>
      //action create antrian
      $('#store').click(function(e) {
        e.preventDefault();

        //define variable
        let no_antrian  = $('#no_antrian').val();
        let token       = $("meta[name='csrf-token']").attr("content");

        //ajax
        $.ajax({
              url: `/dpmptsp`,
              type: "POST",
              cache: false,
              data: {
                "no_antrian": no_antrian,
                "_token": token
              },
              success: function(response){
                Swal.fire({
                  type: 'success',
                  icon: 'success',
                  title: `${response.message}`,
                  showConfirmButton: true,
                  },
                  window.setTimeout(function(){ 
    location.reload();
} ,3000));
              },
              error: function(error){
                if(error.responseJSON.title[0]) {

                //show alert
                $('#alert-title').removeClass('d-none');
                $('#alert-title').addClass('d-block');

                //add message to alert
                $('#alert-title').html(error.responseJSON.no_antrian[0]);
                } 
              }
        });
      });
    </script>
  </body>
</html>