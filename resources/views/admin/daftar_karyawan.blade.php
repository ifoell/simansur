@extends('layouts.master')


@section('content')
        <!-- page content -->
            <div class="page-title">
              <div class="title_left">
                <h3>Daftar karyawan</h3>
              </div>
            </div>

             <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Karyawan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <a type="button" class="btn btn-primary btn-md" href="/gl/form_karyawan">Tambah Karyawan</a>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>NIP</th>
                          <th>Jabatan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($karyawans as $index => $karyawan)
                          <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$karyawan->nama}}</td>
                            <td>{{$karyawan->nip}}</td>
                            <td>{{$karyawan->jabatan}}</td>
                            <td>
                                <form action="{{route('admin.delete_karyawan', $karyawan->id)}}" method="post">
                                  {{ csrf_field() }}
                                  <a href="{{route('admin.edit_karyawan', $karyawan->id)}}" class="btn btn-success btn-xs">edit</a>
                                  <input type="submit" value="hapus" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda Yakin Data ini Dihapus?')">
                                </form>
                              </td>
                          </tr>
                        @endforeach

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
        <!-- /page content -->
@endsection
