@extends('layout.v_template')
@section('title', 'Edit Siswa')

@section('content')

<form action="/siswa/update/{{ $siswa->id_siswa }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIS</label>
                        <input name="nis" class="form-control" value="{{ $siswa->nis }}" readonly>
                            <div class="text-danger">
                                @error('nip')
                                    {{ $message }}
                                @enderror
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input name="nama_siswa" class="form-control" value="{{ $siswa->nama_siswa }}">
                            <div class="text-danger">
                                @error('nama_siswa')
                                    {{ $message }}
                                @enderror
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input name="id_kelas" class="form-control" value="{{ $siswa->id_kelas }}">
                            <div class="text-danger">
                                @error('id_kelas')
                                    {{ $message }}
                                @enderror
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input name="id_jurusan" class="form-control" value="{{ $siswa->id_jurusan }}">
                            <div class="text-danger">
                                @error('id_jurusan')
                                    {{ $message }}
                                @enderror
                            </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                        <img src="{{ url('foto_siswa/'.$siswa->foto_siswa) }}" width="150px">
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Foto</label>
                                    <input type="file" name="foto_siswa" class="form-control" value="{{ $siswa->foto_siswa }}">
                                        <div class="text-danger">
                                            @error('foto_siswa')
                                                {{ $message }}
                                            @enderror
                                        </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Add</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

@endsection