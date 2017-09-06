@extends('layouts.master')

@section('content')
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel">
                   <div class="x_title">
                     <h2>Tulis Surat</h2>
                     <div class="clearfix"></div>
                   </div>
                   <div class="x_content">
                     <br/>

                     <form action="/gl/form_surat_masuk" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                       {{ csrf_field() }}
                          <div class="form-group">
                            <label for="tanggal" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="input-group date" id="tanggal_awal">
                                  <input type="text" class="form-control" name="tanggal">
                                  <span class="input-group-addon">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                              </div>
                            </div>
                          </div>
                       <div class="form-group">
                         <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12">file Upload<span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="photos[]" id="file-input" multiple />
                            <div id="preview" style="margin:20px"></div>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="ket" class="control-label col-md-3 col-sm-3 col-xs-12">keterangan<span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea class="resizable_textarea form-control" name="keterangan" id="keterangan" placeholder="Masukan keterangan surat" style="margin: 0px -28px 0px 0px; height: 66px; width: 498px;"></textarea>
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
                     <a class="btn btn-danger" href="/gl/daftar_surat_masuk">Cancel</a>
                   </div>
                   </div>
                 </div>
               </div>
             </div>
@endsection
