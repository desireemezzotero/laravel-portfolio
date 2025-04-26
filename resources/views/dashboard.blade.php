@extends('layout/master')

@php
  use App\Models\Portfolio;
  $posts = Portfolio::all();
@endphp

@section('content')
  
<ul>

    @foreach ($posts as $post)
         {{$post->id}}
    @endforeach
 </ul>
@endsection