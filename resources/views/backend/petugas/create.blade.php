@extends('backend.app')

@section('title', 'Tambah Petugas')

@extends('backend.sidebar')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Petugas</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('petugas.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nama_petugas" class="form-label">Nama Petugas</label>
                        <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Masukkan Nama Petugas">
                    </div>
                    <div class="col-md-6">
                        <label for="opd_id" class="form-label">OPD</label>
                        <select id="opd_id" class="form-control form-select" name="opd_id">
                            <option hidden>Pilih OPD</option>
                            @foreach($opd as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_opd }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="layanan_id" class="form-label">Layanan</label>
                        <select id="layanan_id" class="form-control form-select" name="layanan_id">
                        <option hidden>-</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#opd_id').on('change', function() {
                var opdID = $(this).val();
                if(opdID) {
                    $.ajax({
                        url: '/getLayanan/'+opdID,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data)
                        {
                         if(data){
                            $('#layanan_id').empty();
                            $('#layanan_id').append('<option hidden>Pilih Layanan</option>'); 
                            $.each(data, function(key, layanan_id){
                                $('select[name="layanan_id"]').append('<option value="'+ layanan_id.id +'">' + layanan_id.nama_layanan + '</option>');
                            });
                        }else{
                            $('#layanan_id').empty();
                        }
                     }
                    });
                    
                }else{
                 $('#layanan_id').empty();
               }
            })
        })
    </script>
@endpush