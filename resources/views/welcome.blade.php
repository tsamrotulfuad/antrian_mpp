<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
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
    <section id="opd">
        <div class="container text-center">
            <div class="row mb-3">
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button" onclick="dpmptsp()">DPMPTSP</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button">Button</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button">Button</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button">Button</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button">Button</button>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button">Button</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button">Button</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button">Button</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button">Button</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <section id="layanan_opd"> 
        <div class="container">
            <div class="card" id="dpmptsp" style="width: auto; display: none">
                <div class="card-header fs-4 text-center">
                    Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu
                </div>
                <div class="row m-3">
                    <div class="col">
                        <div class="d-grid gap-2">
                            <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#modal-oss">OSS</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2">
                            <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#modal-sicantik">SiCantik</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2">
                            <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#modal-lkpm">LPKM</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-oss" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Layanan - OSS</h1>
                </div>
                <div class="modal-body">
                    <div class="py-5 text-center">
                        <h2>Checkout form</h2>
                        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                        </div>
                    </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary mr-auto">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-sicantik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-lkpm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script>
        function dpmptsp() {
            var x = document.getElementById("dpmptsp");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
  </body>
</html>