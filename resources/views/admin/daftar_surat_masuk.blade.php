@extends('layouts.master')


@section('content')
        <!-- page content -->
            <div class="page-title">
              <div class="title_left">
                <h3>Daftar Client</h3>
              </div>
            </div>

             <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Client</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <a type="button" class="btn btn-primary btn-md" href="/gl/form_surat_masuk">Tambah Client</a>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>image</th>
                          <th>keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach ($clients as $client) --}}
                          <tr>
                            <td>1</td>
                            <td>gambar</td>
                            <td>keterangan</td>
                            <td>
                                <form action="" method="post">
                                  {{-- {{ csrf_field() }} --}}
                                  <a href="" class="btn btn-success btn-xs">edit</a>
                                  <input type="submit" value="hapus" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda Yakin Data ini Dihapus?')">
                                </form>
                              </td>
                          </tr>
                       {{--  @endforeach --}}

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
        <!-- /page content -->
@endsection
