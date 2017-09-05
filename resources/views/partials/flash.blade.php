@if (session()->has('message'))
  <div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{session()->get('message')}}
  </div>
@endif
