@extends('layout.v_template')
@section('title', 'Add Siswa')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                <form action="/siswa/insert" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NIS</label>
                                    <input name="nis" class="form-control" value="{{ old('nis') }}">
                                    <div class="text-danger">
                                        @error('nis')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input name="nama_siswa" class="form-control" value="{{ old('nama_siswa') }}">
                                    <div class="text-danger">
                                        @error('nama_siswa')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input name="id_kelas" class="form-control" value="{{ old('id_kelas') }}">
                                    <div class="text-danger">
                                        @error('id_kelas')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input name="id_jurusan" class="form-control" value="{{ old('id_jurusan') }}">
                                    <div class="text-danger">
                                        @error('id_jurusan')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto_siswa" class="form-control" value="{{ old('foto_siswa') }}">
                                    <div class="text-danger">
                                        @error('foto_siswa')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Add</button>
                                    <a href="/siswa" class="btn btn-success">Kembali</a>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection