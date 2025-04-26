@extends('/layout/master')
  
@section('content')
<div class="container">
  <h1>I miei progetti</h1>

  @foreach ($element as $ele)
   <a href="/project/{{$ele->id}}">{{$ele->title}}</a>
  @endforeach
</div>
@endsection