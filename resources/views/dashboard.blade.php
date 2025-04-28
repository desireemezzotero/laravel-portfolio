@extends('layout/master')

@php
  use App\Models\Portfolio;
  $project = Portfolio::all();
@endphp

@section('content')
<h4>ciao</h4>
@endsection