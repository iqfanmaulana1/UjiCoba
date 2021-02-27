@extends('layout.v_template')
@section('title', 'Detail Guru')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th width="100px">NIP</th>
                        <th width="30px">:</th>
                        <th>{{ $guru->nip }}</th>
                    </tr>

                    <tr>
                        <th width="100px">Nama</th>
                        <th width="30px">:</th>
                        <th>{{ $guru->nama_guru }}</th>
                    </tr>

                    <tr>
                        <th width="100px">Mapel</th>
                        <th width="30px">:</th>
                        <th>{{ $guru->mapel }}</th>
                    </tr>

                    <tr>
                        <th width="100px">Foto</th>
                        <th width="30px">:</th>
                        <th><img src="{{ url('foto_guru/'.$guru->foto_guru) }}" width="100px"></th>
                    </tr>

                    <tr>
                        <th><a href="/guru" class="btn btn-success tbn-sm">Kembali</a></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection