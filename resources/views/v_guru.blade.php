@extends('layout.v_template')
@section('title', 'Guru')

@section('content')
     @foreach ($guru  as $data)
          NIM : {{ $data['nip'] }}<br>
          Nama : {{ $data['nama'] }}<br>
          Mapel : {{ $data['mapel'] }}<br>
          <br>
     @endforeach
@endsection