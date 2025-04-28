@extends('/layout/master')
  
@section('content')
<div class="bg-black h-screen ">
  <div class="container mx-auto pt-6">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl text-center">All project</h1>
    @foreach ($element as $ele)

     <a href="{{ route('project.show', $ele->id) }}" class="text-white">{{$ele->title}}</a>
    @endforeach
  </div>
</div>
@endsection
