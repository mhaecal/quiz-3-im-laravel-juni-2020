@extends('layouts.master')

@section('content')
<!-- Dropdown Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Dropdown -->
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	  <h6 class="m-0 font-weight-bold text-primary">Tulis Artikel Baru</h6>
  </div>
  <!-- Card Body -->
  <div class="card-body">
    <form action="{{ url('artikel/'.$id) }}" method="post">
    	@csrf
    	@method('PUT')
		  <div class="form-group">
		    <label for="judul">Judul Artikel</label>
		    <input type="text" class="form-control" id="judul" name="judul" value="{{ $artikel->judul }}">
		  </div>
		  <div class="form-group">
		    <label for="isi">Isi Artikel</label>
		    <textarea rows="3" class="form-control" name="isi">{{ $artikel->isi }}</textarea>
		  </div>
		  <div class="form-group">
		    <label for="tag">Tag Artikel</label>
		    <input type="text" class="form-control" id="tag" name="tag" placeholder="Pisahkan tag dengan koma. Contoh: php, laravel, dll" value="{{ $artikel->tag }}">
		  </div>
		  <input type="submit" value="Submit" class="btn btn-primary">
		</form>
  </div>
</div>
@endsection 