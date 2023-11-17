@extends('layout')

@section('css')
<link rel="stylesheet" href="/theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('title', 'Instansi')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Instansi
                &nbsp;
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-instansi">
                    <i class="nav-icon fas fa-plus"></i>
                </button>

                <div class="modal fade" id="modal-create-instansi">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Buat Instansi</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="POST">
                            <div class="modal-body">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="new">
                                <div class="form-group">
                                    <label for="instansi_jenis">Jenis Instansi</label>
                                    <input type="text" class="form-control text-center" name="instansi_jenis" placeholder="Masukan Jenis Instansi">
                                </div>
                                <div class="form-group">
                                    <label for="instansi_nama">Nama Instansi</label>
                                    <input type="text" class="form-control text-center" name="instansi_nama" placeholder="Masukan Nama Instansi">
                                </div>
                                <div class="form-group">
                                    <label for="instansi_alamat">Alamat Lengkap</label>
                                    <textarea class="form-control text-center" rows="3" name="instansi_alamat" placeholder="Masukan Alamat Lengkap Instansi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="instansi_notelp">No Telpon Instansi</label>
                                    <input type="text" class="form-control text-center" name="instansi_notelp" placeholder="Masukan No Telpon Instansi">
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
            </h3>
          </div>
          <div class="card-body table-responsive">
            <table id="table-detail" class="table table-bordered table-hover text-center">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Jenis</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $k => $v)
                <tr>
                    <td>{{ $v->instansi_id }}</td>
                    <td>{{ $v->instansi_jenis }}</td>
                    <td>{{ $v->instansi_nama }}</td>
                    <td>{{ $v->instansi_alamat }}</td>
                    <td>{{ $v->instansi_notelp }}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-update-instansi-{{ $v->instansi_id }}">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>

                        <div class="modal fade" id="modal-update-instansi-{{ $v->instansi_id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit Instansi {{ $v->instansi_id }}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form method="POST">
                                    <div class="modal-body">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $v->instansi_id }}">
                                        <div class="form-group">
                                            <label for="instansi_jenis">Jenis Instansi</label>
                                            <input type="text" class="form-control text-center" name="instansi_jenis" value="{{ $v->instansi_jenis }}" placeholder="Masukan Jenis Instansi">
                                        </div>
                                        <div class="form-group">
                                            <label for="instansi_nama">Nama Instansi</label>
                                            <input type="text" class="form-control text-center" name="instansi_nama" value="{{ $v->instansi_nama }}" placeholder="Masukan Nama Instansi">
                                        </div>
                                        <div class="form-group">
                                            <label for="instansi_alamat">Alamat Lengkap</label>
                                            <textarea class="form-control text-center" rows="3" name="instansi_alamat" placeholder="Masukan Alamat Lengkap Instansi">{{ $v->instansi_alamat }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="instansi_notelp">No Telpon Instansi</label>
                                            <input type="text" class="form-control text-center" name="instansi_notelp" value="{{ $v->instansi_notelp }}" placeholder="Masukan No Telpon Instansi">
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                              </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('js')
<script src="/theme/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/theme/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/theme/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/theme/plugins/jszip/jszip.min.js"></script>
<script src="/theme/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/theme/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/theme/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/theme/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/theme/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script type="text/javascript">
    $(function () {
      $('#table-detail').DataTable({
        "paging"      : true,
        "lengthChange": false,
        "searching"   : false,
        "ordering"    : true,
        "info"        : true,
        "autoWidth"   : false,
        "responsive"  : true,
      });
    });
</script>
@endsection

@include('errors.alert')
