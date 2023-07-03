@include('notifikasi.pesan')
@extends('layout.main')
@section('title')
   Data Komentar Tamu
    @endsection

    @section('konten')
{{-- <a href="/komen/create" class="btn btn-primary"> +Tambah Data Komentar </a> --}}

<table class="table">
<thead>
    <tr>
        <th> No </th>
        <th>Nama Tamu</th>
        <th>Email</th>
        <th>Komentar</th>
        <th>Tanggal</th>
        <th colspan="2">Aksi</th>
        {{-- <td>
            <a class='btn btn-secondary btn-sm' href='{{url('/mahasiswa/'.$item->nim_mhs)}}'> Detail </a>
            <a class='btn btn-warning btn-sm' href='{{url('/mahasiswa/'.$item->nim_mhs.'/edit')}}'> Edit </a>
        </td> --}}
    </tr>
</thead>
<tbody>
    @foreach ($data as $index => $item)

    <tr>
        {{-- <td>
            @if ($item->gambar)
                <img style="max-width:50px;max-height:50px" src="{{ url('gambar').'/'.$item->gambar }}">
            @endif
        </td> --}}
        <th> {{ $index + $data ->firstItem() }} </th>
        <th>{{ $item->nama}}</th>
        <th>{{ $item->email}}</th>
        <th>{{ $item->komentar}}</th>
        <th>{{ date('d-m-Y', strtotime($item->created_at))}}</th>

        <td>
            {{-- <a class='btn btn-secondary btn-sm' href='{{url('/tamu/'.$item->id)}}'>  Detail</a> --}}
            {{-- <a class='btn btn-warning btn-sm' href='{{url('/tamu/'.$item->id.'/edit')}}'> <i class="bi bi-pencil-square">
                <img src="{{ asset('/assets/img/pencil-square.svg') }}"> Edit  </i></a> --}}

            <form onsubmit="return confirm('Yakin Hapus Data Ini?')" class='d-inline' action="{{'/komen/'.$item->id}}" method='post'>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit"> <i class="bi bi-trash3"> <img src="{{ asset('/assets/img/trash3.svg') }}">
                     Hapus </i> </button>
            </form>
        </td>
    </tr>

    @endforeach
</tbody>


</table>
{{$data->links()}}

<script type="text/javascript">
var addNumeration = function(cl){
  var table = document.querySelector('table.' + cl)
  var trs = table.querySelectorAll('tr')
  var counter = 1

  Array.prototype.forEach.call(trs, function(x,i){
    var firstChild = x.children[0]
    if (firstChild.tagName === 'TD') {
      var cell = document.createElement('td')
      cell.textContent = counter ++
      x.insertBefore(cell,firstChild)
    } else {
      firstChild.setAttribute('colspan',1)
    }
  })
}

addNumeration("table")
</script>
@endsection
