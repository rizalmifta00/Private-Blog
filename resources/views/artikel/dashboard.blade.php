@extends('base')

@section('kontent')

<div class="row ml-3 ">
@foreach($artikel as $ar)
  <div class="col-sm-5 mt-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$ar->judul}}</h5>
        <p class="card-text">{{$ar->konten}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  @endforeach
  
</div>

@endsection