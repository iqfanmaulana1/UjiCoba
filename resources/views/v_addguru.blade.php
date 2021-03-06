@extends('layout.v_template')
@section('title', 'Add Guru')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                <form action="/guru/insert" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input name="nip" class="form-control" value="{{ old('nip') }}">
                                    <div class="text-danger">
                                        @error('nip')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Guru</label>
                                    <input name="nama_guru" class="form-control" value="{{ old('nama_guru') }}">
                                    <div class="text-danger">
                                        @error('nama_guru')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mapel</label>
                                    <input name="mapel" class="form-control" value="{{ old('mapel') }}">
                                    <div class="text-danger">
                                        @error('mapel')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto_guru" class="form-control" value="{{ old('foto_guru') }}">
                                    <div class="text-danger">
                                        @error('foto_guru')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Add</button>
                                    <a href="/guru" class="btn btn-success">Kembali</a>
                                </div>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection