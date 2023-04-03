@extends('layouts.backend.main')

@section('title', 'Kategori')

@section('content')
<!-- Css Datatables -->
<link rel="stylesheet" href="assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css"/>
<link rel="stylesheet" href="assets/css/pages/datatables.css"/>
<link rel="stylesheet" href="assets/extensions/toastify-js/src/toastify.css"/>

<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last mb-3">
          <h3>Data Kategori</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('kategori.index') }}">Kategori</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                List
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
      <div class="card">
        <div class="card-header">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#border-less"><i class="fas fa-plus"></i> Tambah Data</button>
        </div>
        <div class="card-body">
          <table class="table" id="table1">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th>Judul</th>
                <th>Slug</th>
                <th width="20%">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($categories as $row)
              <tr>
                <input type="hidden" class="delete_id" value="{{ $row->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->slug }}</td>
                <td>
                  <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
                  <button class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- Basic Tables end -->

    <!--BorderLess Modal Modal -->
    <div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data</h5>
          <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <form action="{{ route('kategori.store') }}" method="POST" class="form form-vertical">
            @csrf
            <div class="modal-body">
                <div class="form-body">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Kategori</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" class="form-control" name="title" placeholder="Kategori" autofocus value="{{ old('title') }}">
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    <i class="fas fa-times d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Batal</span>
                </button>
                <button type="submit" id="top-center" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="fas fa-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Simpan</span>
                </button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Js Datatables -->
<script src="assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="assets/js/pages/datatables.js"></script>
@endsection
