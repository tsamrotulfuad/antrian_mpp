@extends('backend.app')

@section('title', 'Tambah OPD')

@extends('backend.sidebar')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah OPD</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('opds.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="kode_opd" class="form-label">Kode OPD</label>
                        <input type="text" class="form-control" name="kode_opd" id="kode_opd" placeholder="Masukkan Kode OPD">
                    </div>
                    <div class="col">
                        <label for="nama_opd" class="form-label">Nama OPD</label>
                        <input type="text" class="form-control" name="nama_opd" id="nama_opd" placeholder="Masukkan Nama OPD">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection

