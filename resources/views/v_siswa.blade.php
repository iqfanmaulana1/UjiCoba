@extends('layout.v_template')
@section('title', 'Siswa')

@section('content')
@if (session('pesan'))
<div class="alert alert-success alert_dismissable">
  <button type="button" class="close" data_dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Alert!</h4>
  {{ session('pesan') }}.
</div>
@endif
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <a href="/siswa/add" class="btn btn-primary">Add</a>
        <a href="/siswa/print" target="_blank" class="btn btn-success">Print</a>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <td>No</td>
              <td>NIS</td>
              <td>Nama Siswa</td>
              <td>Kelas</td>
              <td>Jurusan</td>
              <td>Aksi</td>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            @foreach ($siswa as $data)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->nis }}</td>
              <td>{{ $data->nama_siswa }}</td>
              <td>{{ $data->kelas }}</td>
              <td>{{ $data->jurusan }}</td>
              <td>
                <a href="/siswa/detail/{{ $data->id_siswa }}" class="btn btn-success">Detail</a>
                <a href="/siswa/edit/{{ $data->id_siswa }}" class="btn btn-primary">edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_siswa }}">
                  Hapus
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- <a href="/siswa/printpdf" target="_blank" class="btn btn-success">Print PDF</a> -->


@foreach($siswa as $data)
<div class="modal modal-danger fade" id="delete{{ $data->id_siswa }}">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ $data->nama_siswa }}</h4>
      </div>
      <div class="modal-body">
        <p>Apakah Anda Ingin Menghapus Data Ini??</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">NO</button>
        <a href="/siswa/delete/{{ $data->id_siswa }}" class="btn btn-outline">YES</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endforeach
@endsection