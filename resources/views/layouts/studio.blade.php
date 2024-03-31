@extends('main')

@section('content')

<div class="dropdown-1">
  <button class="dropbtn">Create New</button>
  <div class="dropdown-content-1">
    <a href="/createalbum">Create New Album</a>
    <a href="/createfoto">Create New Foto</a>
  </div>
</div>

<div class="col-md-4">
  @foreach ($fotos as $foto)
    <div class="display-foto"><a href="">
      <img src="{{ asset('storage/foto/'.$foto->lokasi_file) }}"></a></div>
  @endforeach

</div>
@endsection