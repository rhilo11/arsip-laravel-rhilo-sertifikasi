@extends('layouts.index')
@section('title', 'About')
@section('content')

<div class="body flex-grow-1 py-5 px-4">
  <div class="container-lg">
    <div class="card mx-3 mb-auto">
      <div class="card-header"><strong class="h4">About</strong><span class="small ms-1"></span></div>
      <div class="card-body p-4">
      <div class="row no-gutters">
        <div class="col-sm-2">
          <img src="{{url('/assets/img/about/Rhilo.jpeg')}}" class="card-img">
        </div>
        <div class="col-sm-8 pl-4">
          <h3>Aplikasi ini dibuat oleh:</h3>
          <dl class="row">
            <dt class="col-sm-2">Nama</dt>
            <dd class="col-sm-9">: Rhilo Pambdi</dd>
            <dt class="col-sm-2">NIM</dt>
            <dd class="col-sm-9">: 1931730016</dd>
            <dt class="col-sm-2">Tanggal</dt>
            <dd class="col-sm-9">: 12 Oktober 2022</dd>
          </dl>
        </div>
      </div>
      </div>
      </div>
    </div>
    </div>
</div>

@endsection