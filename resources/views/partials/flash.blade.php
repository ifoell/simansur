@if (session()->has('message'))
  <div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{session()->get('message')}}
  </div>
@endif

@if (count($errors)>0)
  <div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
      <h5>data gagal ditambahkan, Mohon cek data isian/file upload</h5>
  </div>
@endif
