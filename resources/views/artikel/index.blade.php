@extends('layouts.master')

@section('content')
<a href="{{ url('/artikel/create') }}" class="shadow btn btn-primary mb-3">Tulis artikel baru</a>

@foreach($artikel as $a)
<!-- Dropdown Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Dropdown -->
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  	<a href="{{ url('artikel/'.$a->id) }}">
	    <h3 class="m-0 font-weight-bold text-primary">{{ $a->judul }}</h3>
	  </a>
    <div class="dropdown no-arrow">
      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
        <div class="dropdown-header">Action</div>
        <a class="dropdown-item" href="{{ url('artikel/'.$a->id.'/edit') }}">Edit</a>
        <form action="{{ url('artikel/'.$a->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="dropdown-item">Hapus</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Card Body -->
  <div class="card-body">
    {{ $a->isi }}
  </div>
</div>
@endforeach
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush