@extends('../layouts/master')
@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
    @endif
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm mt-1 ml-3" data-toggle="modal" data-target="#exampleModal">
  Tambah Pertanyaan
</button>
<div class="row">
  <div class="col-sm-6">
  @foreach ($data_pertanyaan as $pertanyaan)
    <div class="card mt-3 ml-3 ">
      <div class="card-body">
     
        <h5 class="card-title">{{$pertanyaan->judul}}</h5>
        <p class="card-text">{{$pertanyaan->isi_pertanyaan}}</p>
        <a href="#" class="btn btn-primary btn-sm">Detail</a>
        <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukan Pertanyaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="/pertanyaan/create" method="POST">
    {{csrf_field()}}
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="form-group">
             <label for="isi_pertanyaan">Isi</label>
             <textarea class="form-control" id="isi_pertanyaan" name="isi_pertanyaan" rows="3"></textarea>
        </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>
@endsection