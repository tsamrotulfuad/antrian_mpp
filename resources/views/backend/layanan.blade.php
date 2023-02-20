@extends('backend.app')

@section('title', 'Layanan')

@extends('backend.sidebar')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">List Layanan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('layanans.create')}}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="text">Tambah data</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Layanan</th>
                                <th>Nama Layanan</th>
                                <th>OPD</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($layanan as $layanans)
                            <tr>
                                <td width="5%">{{ ++$i }}</td>
                                <td width="5%">{{ $layanans->kode_layanan }}</td>
                                <td>{{ $layanans->nama_layanan }}</td>
                                <td>{{ $layanans->opd->nama_opd }}</td>
                                <td>
                                <form action="{{ route('layanans.destroy', $layanans->id) }}" method="POST">

                                    <a class="btn btn-info btn-sm" href="{{ route('layanans.show', $layanans->id) }}">Show</a>

                                    <a class="btn btn-primary btn-sm" href="{{ route('layanans.edit', $layanans->id) }}">Edit</a>

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
                    {{ $layanan->links() }}
                </div>
            </div>
        </div>
@endsection