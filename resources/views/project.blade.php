@extends('/layout/master')
  
@section('content')
<div class="bg-black h-screen ">
  <div class="container mx-auto pt-6">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl text-center">All project</h1>

    <div class="relative overflow-x-auto">
      <table class="w-full text-sm text-left rtl:text-right text-gray">
        <thead class="text-xs uppercase bg-slate-300">
          <tr>
            <th scope="col" class="px-6 py-3">
             Title
            </th>
            <th scope="col" class="px-6 py-3">
             Type
            </th>
            <th scope="col" class="px-6 py-3">
             Technology
            </th>
            <th scope="col" class="px-6 py-3">
             View
            </th>
            <th scope="col" class="px-6 py-3">
             Action
            </th>
          </tr>
        </thead>

        <tbody>
    
          @foreach ($project as $ele)
            <tr class="bg-gray-900 border-b border-gray-200">
              {{-- TITOLO --}}
              <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
               {{$ele->title}}
              </th>

              {{-- TIPO --}}
              <td class="px-6 py-4 text-white">
               {{$ele->type->title_type}}
              </td>

              {{-- TECNOLOGIA --}}
              <td class="px-6 py-4">
                @if(count($ele->technologies) > 0)
                  <div class="text-white">
                    <ul>
                      @foreach($ele->technologies as $tech)
                        <li>
                          {{$tech->title_technology}}
                        </li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </td>

               {{-- VIES --}}
              <td class="px-6 py-4">
                <a href="{{ route('project.show', $ele->id) }}" class="text-white ">
                  <svg class="w-[30px] fill-[#ffffff] hover:fill-lime-400 hover:scale-150 transition-transform duration-300" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path>
                  </svg>
                </a>
              </td>
    
              {{-- ACTION --}}
              @auth
              @if(auth()->user()->remember_token === auth()->user()->remember_token)
              <td class="px-6 py-4">
                <div class="flex justify-items-center h-full">
                      <a href="/project/{{$ele->id}}/edit"> 
                        <svg class="w-[25px] fill-[#ffffff]  hover:fill-amber-300 hover:scale-150 transition-transform duration-300" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                          <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"> </path>
                        </svg>
                      </a> 
        
                      <form action="{{route('project.destroy', $project)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white ml-5">
                          <svg class="w-[25px] fill-[#ffffff]  hover:fill-red-600 hover:scale-150 transition-transform duration-300" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                          </svg>
                        </button>
                      </form>
                    </div>
                  </td>
                @endif
              @endauth
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
