@extends('/layout/master')

@section('content')
<div class="bg-black h-screen ">
  <div class="container mx-auto pt-6">
    <h4 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl text-center">Inserisci un nuovo progetto</h4>



  <form class="max-w-md mx-auto pt-10 text-white" action="{{route('project.store')}}" method="POST">

    @csrf
    <div class="relative z-0 w-full mb-5 group">
      <input type="Text" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 peer" placeholder=" "required />

      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>

    </div>

    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="description"  id="description" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />

      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
    </div>

    <div class="relative z-0 w-full mb-5 group">
      <input type="image_url" id="image"  name="image" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />
      
      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Image URL</label>
    </div>


   <div class="relative z-0 w-full mb-5 group">
      <select name="type_id" id="type_id" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer">

         @foreach ($types as $type)
          <option value="{{$type->id}}" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer">{{$type->title_type}}

          </option>
        @endforeach

      </select>

      <label for="type" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Type</label>
    </div> 


    <div class="relative z-0 w-full mb-5 group">
     
      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Technology</label>

      @foreach ($technologies as $technology)
        <input name="technologies[]" id="tec-{{$technology->title_technology}}" type="checkbox" value="{{$technology->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2 ">
          {{$technology->title_technology}}
         </input>
      @endforeach

    </div>
  
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
  </form>
</div>

@endsection