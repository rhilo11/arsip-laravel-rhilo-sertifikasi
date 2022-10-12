@extends('layouts.index')
@section('title', 'Lihat Arsip')
@section('content')

<div class="body flex-grow-1 py-5 px-4">
  <div class="container-lg">
    <div class="card mx-3 mb-auto">
      <div class="card-header"><strong class="h4">Arsip Surat</strong><span class="small ms-1"></span></div>
      <div class="card-body  p-4">
        <dl class="row">
            <dt class="col-sm-3">Nomor</dt>
            <dd class="col-sm-9">: {{$arsip->no_surat}}</dd>
            <dt class="col-sm-3">Kategori</dt>
            <dd class="col-sm-9">: {{$arsip->kategori}}</dd>
            <dt class="col-sm-3">Judul</dt>
            <dd class="col-sm-9">: {{$arsip->judul}}</dd>
            <dt class="col-sm-3">Waktu Unggah</dt>
            <dd class="col-sm-9">: {{$arsip->created_at}}</dd>
        </dl>
        <div class="row">
            <iframe src="{{url('/arsip/'.$arsip->dokumen.'#toolbar=0')}}" width="100%" height="500px"></iframe>
        </div>
      </div>
      <div class="card-footer hstack gap-3">
        <a class="btn btn-sm btn-secondary" href="/"><< Kembali</a>
        <div class="vr"></div>
        <a class="btn btn-sm btn-primary" href="/arsip/{{$arsip->dokumen}}" download>Unduh</a>
        <div class="vr"></div>
        <a class="btn btn-sm btn-warning" href="/">Edit/Ganti File</a>
      </div>
    </div>
    </div>
</div>

@endsection