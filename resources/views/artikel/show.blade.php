@extends('layouts.master')

@section('content')
<h3 class="font-weight-bold">{{ $artikel->judul }}</h3>
<p>SLUG: {{ $artikel->slug }}</p>
<p>{{ $artikel->isi }}</p>
@foreach($tag as $t)
<a href="#" class="btn btn-primary">{{ $t }}</a>
@endforeach
@endsection