@extends('layout.v_template')
@section('title', 'Detail Siswa')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th width="100px">NIS</th>
                        <th width="30px">:</th>
                        <th>{{ $siswa->nis }}</th>
                    </tr>

                    <tr>
                        <th width="100px">Nama Siswa</th>
                        <th width="30px">:</th>
                        <th>{{ $siswa->nama_siswa }}</th>
                    </tr>

                    <tr>
                        <th width="100px">Kelas</th>
                        <th width="30px">:</th>
                        <th>{{ $siswa->id_kelas }}</th>
                    </tr>

                    <tr>
                        <th width="100px">Foto</th>
                        <th width="30px">:</th>
                        <th><img src="{{ url('foto_siswa/'.$siswa->foto_siswa) }}" width="100px"></th>
                    </tr>

                    <tr>
                        <th><a href="/siswa" class="btn btn-success tbn-sm">Kembali</a></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection