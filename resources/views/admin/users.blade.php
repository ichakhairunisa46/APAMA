@extends('layout')

@section('css')
<link rel="stylesheet" href="/theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('title', 'User')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data User</h3>
          </div>
          <div class="card-body table-responsive">
            <table id="table-detail" class="table table-bordered table-hover text-center">
              <thead>
                <tr>
                    <th>User ID</th>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Level</th>
                    <th>Instansi</th>
                    <th>Nomor HP</th>
                    <th>Email</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th>Updated By</th>
                    <th>Updated At</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $k => $v)
                <tr>
                    <td>{{ $v->no_induk }}</td>
                    <td>{{ $v->nama }}</td>
                    <td>{{ $v->level_nama }}</td>
                    <td>{{ $v->instansi_nama }}</td>
                    <td>{{ $v->no_hp }}</td>
                    <td>{{ $v->email }}</td>
                    <td>{{ $v->tempat_lahir }}</td>
                    <td>{{ $v->tanggal_lahir }}</td>
                    <td>{{ $v->agama }}</td>
                    <td>{{ $v->jenis_kelamin }}</td>
                    <td>{{ $v->alamat }}</td>
                    <td>{{ $v->created_nama }} ({{ $v->created_by }})</td>
                    <td>{{ $v->created_at }}</td>
                    <td>{{ $v->updated_nama }} ({{ $v->updated_by }})</td>
                    <td>{{ $v->updated_at }}</td>

                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                    <th>User ID</th>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Level</th>
                    <th>Instansi</th>
                    <th>Nomor HP</th>
                    <th>Email</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th>Updated By</th>
                    <th>Updated At</th>
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
