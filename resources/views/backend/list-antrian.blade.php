@extends('backend.app')

@section('title', 'List Antrian')

@extends('backend.sidebar')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Jenis Pelayanan : {{auth()->user()->nama_layanan}}</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
            <div class="card-header py-3">           
                <span class="text">List Antrian</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="3%">No.</th>
                                <th width="15%">Kode Layanan</th>
                                <th width="20%">No. Antrian</th>
                                <th width="30%">Nama Layanan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
        </div>
@endsection