@extends('layouts.index')
@section('title', 'Data Arsip')
@section('content')

<div class="body flex-grow-1 p-4 mt-1">
  <div class="container-lg">
    <div class="ml-3">
        <p><strong class="h3">Arsip Surat</strong><span class="small ms-1"></span></p>
        <p class="text-medium-emphasis">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.<br>Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
    </div>
        <div class="card mb-auto mt-3">
      <div class="card-body p-4">
          <div class="tab-content">
            <div class="tab-pane p-3 m-auto active preview" role="tabpanel" id="preview-387">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">Cari Surat</span>
              <input type="search" placeholder="Search..." class="form-control" id="myInput" >
              <button class="btn btn-outline-secondary" type="button" onclick="myFunction()">Button</button>
            </div>
              <table id="myTable" class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Waktu Pengarsipan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @forelse($data as $item)
                    <tr>
                    <td>
                        {{$item->no_surat}}
                    </td>
                    <td>
                        {{$item->kategori}}
                    </td>
                    <td>
                        {{$item->judul}}
                    </td>
                    <td>
                        {{$item->created_at}}
                    </td>
                    <td>
                    <div class="hstack gap-1">
                                            <button type="button" class="btn btn-sm btn-danger"  id="myBtn" data-toggle="modal" data-target="#exampleModal" data-id="{{$item->id}}" 
        onclick="HapusArsip(this);">
                                              Hapus
                                            </button >
                      <div class="vr"></div>
                      <a class="btn btn-sm btn-warning" href="/arsip/{{$item->dokumen}}" download>Unduh</a>
                      <div class="vr"></div>
                      <a class="btn btn-sm btn-primary" href="/arsip/show/{{$item->id}}">Lihat >></a>
                    </div>
                    </td>
                    </tr>
                    <!-- <iframe src="{{url('/arsip/'.$item->dokumen.'#toolbar=0')}}" width="100%" height="500px"> -->
                    @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data yang ditemukan</td>
                            </tr>
                @endforelse
                </tbody>
              </table>
            <a class="btn btn-sm btn-primary" href="/arsip/create">Arsipkan Surat..</a>
            </div>
        </div>
      </div>
    </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus arsip surat ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
        <a id="oke-hapus" class="btn btn-sm btn-danger" href="">Ya!</a>
      </div>
    </div>
  </div>
</div>


<script>
  let HapusArsip = button => {
    let refer = "/arsip/delete/" + button.getAttribute('data-id');
    document.getElementById("oke-hapus").href = refer;
  }
</script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

@endsection