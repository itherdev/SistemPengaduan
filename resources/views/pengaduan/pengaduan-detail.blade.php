@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4>pengaduan</h4>
                        <b>{{ $pengaduan->name_pelaku}}</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pengaduan.v', $pengaduan->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <dl class="row">
                            <dt class="col-sm-3">nam_pelapor</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->nam_pelapor}}</dd>

                            <dt class="col-sm-3">email_pelapor</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->email_pelapor}}</dd>

                            <dt class="col-sm-3">phone_pelapor</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->phone_pelapor}}</dd>

                            <dt class="col-sm-3">alama_pelapor</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->alama_pelapor}}</dd>

                            <dt class="col-sm-3">name_pelaku</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->name_pelaku}}</dd>

                            <dt class="col-sm-3">telp_pelaku</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->telp_pelaku}}</dd>

                            <dt class="col-sm-3">alamat_pelaku</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->alamat_pelaku}}</dd>

                            <dt class="col-sm-3">bukti</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->bukti}}</dd>

                            <dt class="col-sm-3">jenis_narkoba</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->jenis_narkoba}}</dd>

                            <dt class="col-sm-3">peran_pelaku</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->peran_pelaku}}</dd>

                             <dt class="col-sm-3">profesi_pelaku</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->profesi_pelaku}}</dd>

                            <dt class="col-sm-3">alamat_kejadian</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->alamat_kejadian}}</dd>

                            <dt class="col-sm-3">tanggal_kejadian</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->tanggal_kejadian}}</dd>

                            <dt class="col-sm-3">waktu_kejadian</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->waktu_kejadian}}</dd>

                            <dt class="col-sm-3">isi_pengaduan</dt>
                            <dd class="col-sm-9">: {{ $pengaduan->isi_pengaduan}}</dd>

                        </dl>
                        </form>
                            <div class="card-footer text-right">
                                <button class="btn btn-info mr-1"> <a href="{{ route('pengaduan')}}"> Kembali</a> </button>
                            </div>
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush