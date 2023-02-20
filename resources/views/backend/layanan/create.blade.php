@extends('backend.app')

@section('title', 'Tambah Layanan')

@extends('backend.sidebar')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Layanan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('layanans.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="kode_layanan" class="form-label">Kode Layanan</label>
                        <input type="text" class="form-control" name="kode_layanan" id="kode_layanan" placeholder="Masukkan Kode Layanan">
                    </div>
                    <div class="col-md-6">
                        <label for="nama_layanan" class="form-label">Nama Layanan</label>
                        <input type="text" class="form-control" name="nama_layanan" id="nama_layanan" placeholder="Masukkan Nama Layanan">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="opd_id" class="form-label">OPD</label>
                        <select id="opd_id" class="form-control form-select" name="opd_id">
                            <option hidden>Pilih OPD</option>
                            @foreach($opds as $opd)
                                <option value="{{ $opd->id }}">{{ $opd->nama_opd }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection

