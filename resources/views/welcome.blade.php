@extends('/layout/master')

@section('content')
<div class="h-screen">
  <div className="container mx-auto flex items-center justify-center h-screen">
    <div className="container mx-auto border-r-2 max-w-screen-xl border-gray-900">
      <div className="text-center">
        <h1 className="mt-4 text-4xl font-extrabold text-white">Hello, I'm Desiree</h1>
        <h4 className="mt-2 font-extrabold">Jr. Full Stack Web Developer</h4>

        <div className="container-animation w-[900px] mx-auto text-neutral-400 mt-5">
          <div className="stage_animation">
            <h4 className="mt-2 text-6xl font-extrabold h4-animation mr-8">Jr. Full Stack Web Developer</h4>
            <h4 className="mt-2 text-6xl font-extrabold h4-animation">Jr. Full Stack Web Developer</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection