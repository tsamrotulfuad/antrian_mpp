@extends('backend.app')

@section('title', 'Petugas')

@extends('backend.sidebar')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">List Petugas</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('petugas.create')}}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="text">Tambah data</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Petugas</th>
                                <th>Layanan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($petugas as $item)
                            <tr>
                                <td width="5%">{{ ++$i }}</td>
                                <td>{{ $item->nama_petugas }}</td>
                                <td>{{ $item->layanan->nama_layanan }}</td>
                                <td>
                                <form action="{{ route('petugas.destroy',$item->id) }}" method="POST">

                                    <a class="btn btn-info btn-sm" href="{{ route('petugas.show',$item->id) }}">Show</a>

                                    <a class="btn btn-primary btn-sm" href="{{ route('petugas.show',$item->id) }}">Edit</a>

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
                    {{ $petugas->links() }}
                </div>
            </div>
        </div>
@endsection
