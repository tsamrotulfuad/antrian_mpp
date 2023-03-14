@extends('backend.app')

@section('title', 'List Antrian')

@extends('backend.sidebar')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Jenis Pelayanan</h1>

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
                            @forelse($antrian as $antrians)
                            <tr>
                                <td width="5%">{{ ++$i }}</td>
                                <td width="5%">{{ $antrians->kode_layanan }}</td>
                                <td>{{ $antrians->no_antrian }}</td>
                                <td>{{ $antrians->nama_layanan }}</td>
                                <td>
                                <form action="" method="POST">

                                    <a class="btn btn-info btn-sm" href="">Show</a>

                                    <a class="btn btn-primary btn-sm" href="">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
        </div>
@endsection