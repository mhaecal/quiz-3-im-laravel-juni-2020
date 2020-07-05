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
    <form action="{{ url('/artikel') }}" method="post">
    	@csrf
		  <div class="form-group">
		    <label for="judul">Judul Artikel</label>
		    <input type="text" class="form-control" id="judul" name="judul">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Isi Artikel</label>
		    <textarea rows="3" class="form-control" name="isi"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Tag Artikel</label>
		    <input type="text" class="form-control" id="tag" name="tag" placeholder="Pisahkan tag dengan koma. Contoh: php, laravel, dst">
		  </div>
		  <input type="hidden" name="user_id" value="1">
		  <input type="submit" value="Submit" class="btn btn-primary">
		</form>
  </div>
</div>
@endsection 