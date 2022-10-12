@extends('layouts.index')
@section('title', 'Unggah Arsip')
@section('content')

<div class="body flex-grow-1 p-4 mt-1">
  <div class="container-lg">
    <div class="ml-3">
        <p><strong class="h3">Arsip Surat</strong><span class="h4 ms-1"> >> Unggah</span></p>
        <p class="text-medium-emphasis small">Unggah surat yang telah terbit pada form ini untuk diarsipkan.<br>Catatan:<br>&emsp;&ensp;• Gunakan file berformat PDF</p>
    </div>
    <div class="card mx-3 mt-4 mb-auto">
      <div class="card-body p-4">
          <form method="POST" action="/arsip/store" enctype="multipart/form-data">
          @csrf
        <div>
            <div class="row mb-3">
            <label for="no_surat" class="col-sm-2 col-form-label col-form-label-sm">Nomor Surat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="no_surat" name="no_surat" placeholder="Nomor Surat" required>
            </div>
            </div>
            <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label col-form-label-sm">Kategori</label>
            <div class="col-sm-10">
                    <select class="form-select form-select-sm" id="kategori" name="kategori" required>
                        <option selected disabled>Pilih kategori...</option>
                        <option value="Undangan">Undangan</option>
                        <option value="Pengumuman">Pengumuman</option>
                        <option value="Nota Dinas">Nota Dinas</option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                    </select>
            </div>
            </div>
            <div class="row mb-3">
            <label for="judul" class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="judul" name="judul" placeholder="Judul Surat" required>
            </div>
            </div>
            <div class="row mb-auto">
            <label for="dokumen" class="col-sm-2 col-form-label col-form-label-sm">File Surat (PDF)</label>
                <div class="input-group input-group-sm col-sm-10" >
                <input type="file" class="form-control form-control-sm" id="dokumen" name="dokumen" required>
                <label class="input-group-text" for="dokumen">Upload Surat</label>
                </div>
            </div>
</div>
        </div>
        <div class="card-footer hstack gap-3">
        <a class="btn btn-sm btn-secondary" href="/"><< Kembali</a>
        <div class="vr"></div>
<input class="btn btn-sm btn-primary" type="submit" value="Simpan">
</form>
      </div>
    </div>
    </div>
</div>

@endsection