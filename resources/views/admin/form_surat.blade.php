@extends('layouts.master')
@section('linkcss')
  <!-- iCheck -->
  <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href="/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
  <!-- Switchery -->
  <link href="/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
  <!-- starrr -->
  <link href="/vendors/starrr/dist/starrr.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href="/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <!-- Ion.RangeSlider -->
  <link href="/vendors/normalize-css/normalize.css" rel="stylesheet">
  <link href="/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <!-- Bootstrap Colorpicker -->
  <link href="/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
  <link href="/vendors/cropper/dist/cropper.min.css" rel="stylesheet">
@endsection
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
                     <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_surat">Jenis Surat<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="form-control" id="jenis_surat" name="jenis_surat">
                             <option>Surat Keterangan</option>
                           </select>
                        </div>
                       </div>
                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lingkup-surat">Lingkup Surat<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="form-control" id="lingkup_surat" name="lingkup_surat">
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
                         <label for="nomor_surat" class="control-label col-md-3 col-sm-3 col-xs-12">No. Surat</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="nomor_surat" class="form-control col-md-7 col-xs-12" type="text" name="nomor_surat" readonly="">
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
                           <select id="client" class="select2_single form-control" tabindex="-1">
                            <option value="">Select a client...</option>
                            <option value="4">Thomas Edison</option>
                            <option value="1">Nikola</option>
                            <option value="3">Nikola Tesla</option>
                            <option value="5">Arnold Schwarzenegger</option>
                          </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="asal_instansi" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Instansi Client</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="asal_instansi" class="form-control col-md-7 col-xs-12" type="text" name="asal_instansi">
                         </div>
                       </div>
                          <div class="form-group">
                            <label for="tanggal_awal" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
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
                         <label for="isi_surat" class="control-label col-md-3 col-sm-3 col-xs-12">Isi Surat</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea class="resizable_textarea form-control" name="isi_surat" id="isi_surat" placeholder="Masukan Isi surat" style="margin: 0px -28px 0px 0px; height: 66px; width: 498px;"></textarea>
                         </div>
                       </div>

{{--
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
                          </div> --}}

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
@endsection
@section('linkjs')
  <!-- bootstrap-progressbar -->
  <script src="/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="/vendors/iCheck/icheck.min.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="/vendors/moment/min/moment.min.js"></script>
  <script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap-wysiwyg -->
  <script src="/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
  <script src="/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
  <script src="/vendors/google-code-prettify/src/prettify.js"></script>
  <!-- jQuery Tags Input -->
  <script src="/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
  <!-- Switchery -->
  <script src="/vendors/switchery/dist/switchery.min.js"></script>
  <!-- Select2 -->
  <script src="/vendors/select2/dist/js/select2.full.min.js"></script>
  <!-- Parsley -->
  <script src="/vendors/parsleyjs/dist/parsley.min.js"></script>
  <!-- Autosize -->
  <script src="/vendors/autosize/dist/autosize.min.js"></script>
  <!-- jQuery autocomplete -->
  <script src="/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
  <!-- starrr -->
  <script src="/vendors/starrr/dist/starrr.js"></script>
  <!-- bootstrap-datetimepicker -->
  <script src="/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <!-- Ion.RangeSlider -->
  <script src="/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
  <!-- Bootstrap Colorpicker -->
  <script src="/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- jquery.inputmask -->
  <script src="/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
  <!-- jQuery Knob -->
  <script src="/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- Cropper -->
  <script src="/vendors/cropper/dist/cropper.min.js"></script>
  <!-- Initialize datetimepicker -->
  <script>
  $('#tanggal_awal').datetimepicker({
      format: 'YYYY-MM-DD'
  });

  $(document).ready(function() {
          $('#single_cal3').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_3"
          }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
          });

          $(".select2_single").select2({
            placeholder: "Select a client",
            allowClear: true
          });

          });

  //untuk preview image sebelum upload
  function previewImages() {
      var $preview = $('#preview').empty();
      if (this.files) $.each(this.files, readAndPreview);
      function readAndPreview(i, file) {
        if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
          return alert(file.name +" is not an image");
        } // else...
        var reader = new FileReader();
        $(reader).on("load", function() {
          $preview.append($("<img/>", {src:this.result, height:100}));
        });
        reader.readAsDataURL(file);
      }
    }
    $('#file-input').on("change", previewImages);
  </script>
@endsection
