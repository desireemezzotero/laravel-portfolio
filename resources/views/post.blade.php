@extends('/layout/master')
  
@section('content')

<div class="bg-black h-screen ">
  <div class="container mx-auto pt-6">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl text-center">Project with id {{$project->id}}</h1>

    <a href="/project/{{$project->id}}/edit" class="text-white">Modifica il tuo progetto</a>

    <p class="text-white">
     {{$project->title}}
    </p>
  </div>
</div>
@endsection
