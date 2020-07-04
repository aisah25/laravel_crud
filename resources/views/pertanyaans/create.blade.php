@extends('../layouts/master')
@section('content')
<div class="card card-primary ml-3 mt-3 mr-3">
              <div class="card-header">
                <h3 class="card-title">MASUKAN PERTANYAAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('/pertanyaan}}" method="POST" id="quickForm" novalidate="novalidate">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Judul">
                  </div>
                  <div class="form-group">
                  
                    <label for="isi">Isi</label>
                    <input type="text" name="isi_pertanyaan" class="form-control" id="isi" placeholder="Masukan pertanyaan ...">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection