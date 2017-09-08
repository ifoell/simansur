@extends('layouts.master')

@section('content')
  <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel">
                   <div class="x_title">
                     <h2>Tambah Karyawan</h2>
                     <div class="clearfix"></div>
                   </div>
                   <div class="x_content">
                     <br/>
                     <form action="/gl/form_karyawan" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                       {{ csrf_field() }}
                       <div class="form-group">
                         <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Karyawan <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="nama" class="form-control col-md-7 col-xs-12" required="required" type="text" name="nama">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="nip" class="control-label col-md-3 col-sm-3 col-xs-12">NIP <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="nip" class="form-control col-md-7 col-xs-12" type="text" name="nip" required="required">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="jabatan" class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="jabatan" class="form-control col-md-7 col-xs-12" type="text" name="jabatan">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="alamat" class="form-control col-md-7 col-xs-12" type="text" name="alamat" required="required">
                         </div>
                       </div>

                       <div class="ln_solid"></div>
                       <div class="form-group">
                         <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
 						               <button class="btn btn-primary" type="reset">Reset</button>
                           <button type="submit" class="btn btn-success">Simpan</button>
                         </div>
                       </div>
                     </form>
                     <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                     <a class="btn btn-danger" href="/gl/daftar_karyawan">Cancel</a>
                   </div>
                   </div>
                 </div>
               </div>
             </div>
@endsection
