@extends('layouts.master')

@section('content')
  <div class="right_col" role="main">
     <div class="">
  <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel">
                   <div class="x_title">
                     <h2>Tulis Surat</h2>
                     <div class="clearfix"></div>
                   </div>
                   <div class="x_content">
                     <br/>
                     <form action="/gl/daftar_client" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                       {{ csrf_field() }}
                       <div class="form-group">
                         <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Client</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="nama" class="form-control col-md-7 col-xs-12" type="text" name="nama">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="instansi" class="control-label col-md-3 col-sm-3 col-xs-12">Instansi</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="instansi" class="form-control col-md-7 col-xs-12" type="text" name="instansi">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="alamat" class="form-control col-md-7 col-xs-12" type="text" name="alamat">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="no_telp" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="no_telp" class="form-control col-md-7 col-xs-12" type="text" name="no_telp">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email">
                         </div>
                       </div>

                       <div class="ln_solid"></div>
                       <div class="form-group">
                         <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <button class="btn btn-primary" type="button">Cancel</button>
 						               <button class="btn btn-primary" type="reset">Reset</button>
                           <button type="submit" class="btn btn-success">Simpan</button>
                         </div>
                       </div>
                     </form>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
@endsection