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
                     <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lingkup-surat">Lingkup Surat<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="form-control" id="lingkup_surat" name="nama_perusahaan">
                             <option>Internal</option>
                             <option>External</option>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_perusahaan">Nama Perusahaan <span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="form-control" id="nama_perusahaan" name="nama_perusahaan">
                             <option id="rji">Rajonet Indonesia</option>
                             <option id="sch">Skularsi</option>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="perihal" class="control-label col-md-3 col-sm-3 col-xs-12">Perihal</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="perihal" class="form-control col-md-7 col-xs-12" type="text" name="perihal">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="lampiran" class="control-label col-md-3 col-sm-3 col-xs-12">Lampiran</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="lampiran" class="form-control col-md-7 col-xs-12" type="text" name="lampiran">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="client" class="control-label col-md-3 col-sm-3 col-xs-12">Client</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="client" class="form-control col-md-7 col-xs-12" type="text" name="client">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="asal_instansi" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Instansi Client</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="asal_instansi" class="form-control col-md-7 col-xs-12" type="text" name="asal_instansi">
                         </div>
                       </div>
                          <div class="form-group">
                            <label for="tanggal_awal" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Awal</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="input-group date" id="tanggal_awal">
                                  <input type="text" class="form-control">
                                  <span class="input-group-addon">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="tanggal_awal" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Akhir</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="input-group date" id="tanggal_akhir">
                                  <input type="text" class="form-control" disabled="disabled">
                                  <span class="input-group-addon" disabled="disabled">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                              </div>
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
