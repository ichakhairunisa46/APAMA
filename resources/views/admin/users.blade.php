@extends('layout')

@section('css')
<link rel="stylesheet" href="/theme/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

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
            <h3 class="card-title">Data User
                &nbsp;
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-user">
                    <i class="nav-icon fas fa-plus"></i>
                </button>

                <div class="modal fade" id="modal-create-user">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Buat User</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="POST">
                            <div class="modal-body">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="new">
                                <div class="form-group">
                                    <label for="no_induk">Nomor Induk</label>
                                    <input type="text" class="form-control text-center" name="no_induk" placeholder="Masukan Nomor Induk">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control text-center" name="nama" placeholder="Masukan Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control text-center" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="id_level">Level</label>
                                    <select class="form-control select2bs4" name="id_level">
                                        @foreach ($get_level as $lvl)
                                        <option value="{{ $lvl->id }}">{{ $lvl->text }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_instansi">Nama Instansi</label>
                                    <select class="form-control select2bs4" name="id_instansi">
                                        @foreach ($get_instansi as $ins)
                                        <option value="{{ $ins->id }}">{{ $ins->text }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">Nomor Handphone</label>
                                    <input type="number" class="form-control text-center" name="no_hp" placeholder="Masukan Nomor Handphone">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control text-center" name="email" placeholder="Masukan Email">
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control text-center" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control text-center" name="tanggal_lahir">
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select class="form-control select2bs4" name="agama">
                                        @foreach ($get_agama as $agm)
                                        <option value="{{ $agm->id }}">{{ $agm->text }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control select2bs4" name="jenis_kelamin">
                                        @foreach ($get_gender as $gdr)
                                        <option value="{{ $gdr->id }}">{{ $gdr->text }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control text-center" rows="3" name="alamat" placeholder="Masukan Alamat Lengkap"></textarea>
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
            <table id="table-detail" class="table table-bordered table-hover text-center" style="display: 100%">
              <thead>
                <tr>
                    <th>#</th>
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
                    {{-- <th>Created By</th>
                    <th>Created At</th>
                    <th>Updated By</th>
                    <th>Updated At</th> --}}
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $k => $v)
                <tr>
                    <td>{{ $v->user_id }}</td>
                    <td>{{ $v->no_induk }}</td>
                    <td>{{ $v->nama }}</td>
                    <td>{{ $v->level_nama }}</td>
                    <td>{{ $v->instansi_nama }}</td>
                    <td>{{ $v->no_hp }}</td>
                    <td>{{ $v->email }}</td>
                    <td>{{ $v->tempat_lahir }}</td>
                    <td>{{ $v->tanggal_lahir }}</td>
                    <td>{{ $v->agama_nama }}</td>
                    <td>{{ $v->gender_nama }}</td>
                    <td>{{ $v->alamat }}</td>
                    {{-- <td>{{ $v->created_nama }} ({{ $v->created_by }})</td>
                    <td>{{ $v->created_at }}</td>
                    <td>{{ $v->updated_nama }} ({{ $v->updated_by }})</td>
                    <td>{{ $v->updated_at }}</td> --}}
                    <td>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-update-user-{{ $v->user_id }}">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>

                        <div class="modal fade" id="modal-update-user-{{ $v->user_id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit User {{ $v->user_id }}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form method="POST">
                                    <div class="modal-body">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $v->user_id }}">
                                        <div class="form-group">
                                            <label for="no_induk">Nomor Induk</label>
                                            <input type="text" class="form-control text-center" name="no_induk" value="{{ $v->no_induk }}" placeholder="Masukan Nomor Induk">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control text-center" name="nama" value="{{ $v->nama }}" placeholder="Masukan Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control text-center" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="id_level">Level</label>
                                            <select class="form-control select2bs4" name="id_level">
                                                @foreach ($get_level as $lvl)
                                                @php
                                                    if ($lvl->id == $v->id_level)
                                                    {
                                                        $selected = 'selected';
                                                    }
                                                    else {
                                                        $selected = '';
                                                    }
                                                @endphp
                                                <option value="{{ $lvl->id }}" {{ $selected }}>{{ $lvl->text }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_instansi">Nama Instansi</label>
                                            <select class="form-control select2bs4" name="id_instansi">
                                                @foreach ($get_instansi as $ins)
                                                @php
                                                    if ($ins->id == $v->id_instansi)
                                                    {
                                                        $selected = 'selected';
                                                    }
                                                    else {
                                                        $selected = '';
                                                    }
                                                @endphp
                                                <option value="{{ $ins->id }}" {{ $selected }}>{{ $ins->text }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">Nomor Handphone</label>
                                            <input type="number" class="form-control text-center" name="no_hp" value="{{ $v->no_hp }}" placeholder="Masukan Nomor Handphone">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control text-center" name="email" value="{{ $v->email }}" placeholder="Masukan Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control text-center" name="tempat_lahir" value="{{ $v->tempat_lahir }}" placeholder="Masukan Tempat Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control text-center" name="tanggal_lahir" value="value="{{ $v->tanggal_lahir }}"">
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="form-control select2bs4" name="agama">
                                                @foreach ($get_agama as $agm)
                                                @php
                                                    if ($agm->id == $v->agama)
                                                    {
                                                        $selected = 'selected';
                                                    }
                                                    else {
                                                        $selected = '';
                                                    }
                                                @endphp
                                                <option value="{{ $agm->id }}" {{ $selected }}>{{ $agm->text }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control select2bs4" name="jenis_kelamin">
                                                @foreach ($get_gender as $gdr)
                                                @php
                                                    if ($gdr->id == $v->jenis_kelamin)
                                                    {
                                                        $selected = 'selected';
                                                    }
                                                    else {
                                                        $selected = '';
                                                    }
                                                @endphp
                                                <option value="{{ $gdr->id }}" {{ $selected }}>{{ $gdr->text }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control text-center" rows="3" name="alamat" placeholder="Masukan Alamat Lengkap">{{ $v->alamat }}</textarea>
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
<script src="/theme/plugins/select2/js/select2.full.min.js"></script>

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
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });

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
