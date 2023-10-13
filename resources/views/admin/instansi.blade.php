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
            <h3 class="card-title">Data Instansi</h3>
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
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Jenis</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                </tr>
              </tfoot>
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
