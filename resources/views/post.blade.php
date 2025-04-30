@extends('/layout/master')
  
@section('content')

<div class="bg-black h-screen ">
  <div class="container mx-auto pt-6">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl text-center">Project with id {{$project->id}}</h1>
    <img src=" {{$project->image}}" alt="">

    <p class="text-white">Il tipo del tuo progetto è: {{$project->type->title_type}}</p>

    @auth
      @if(auth()->user()->remember_token === auth()->user()->remember_token)

       <a href="/project/{{$project->id}}/edit" class="text-white">Modifica il tuo progetto</a>

        <form action="{{route('project.destroy', $project)}}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" class="bottom-0 text-white" value="elimina">
        </form>
      @endif
    @endauth

    <p class="text-white">
     {{$project->title}}
    </p>
  </div>
</div>
@endsection
