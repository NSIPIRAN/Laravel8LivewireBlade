@extends('layouts.web')

@section('content')
<div class="grid grid-cols-4 gap-4">
  <div class="p-8 bg-gray-200 col-span-2">
    <ul class="flex flex-col">
      <li class="font-medium text-sm text-gray-400 uppercase mb-4">
          Contenido
      </li>
      @foreach ($course->posts as $post)
          <li class="bg-gray-300 px-2 rounded-lg flex items-center text-gray-600 mt-2">
            {{ $post->name }}
            @if ($post->free)
               <span 
                  class="text-xs text-gray-500 font-semibold ml-auto ">
                 Gratis
               </span>
            @endif
          </li>
      @endforeach
    </ul>  
  </div>  
  <div class="text-gray-700 col-span-2">
    <img src="{{ $course->image }}" alt="">
    <h2 class="text-4xl">{{ $course->name }}</h2>
    <p>{{ $course->description }} </p>
    <div class="flex " > 
      <div class="flex mt-3">
        <img src="{{ $course->user->avatar }}" class="h-10 w-10 rounded-full mr-2" alt="">
      </div>
      <div class=" mt-3">
        <p class="text-gray-500 text-sm">{{ $course->user->name }}</p>
        <p class="text-gray-300 text-xs">{{ $course->created_at->diffForHUmans() }}</p>
      </div>
    </div>
      <div class="font-medium text-sm text-gray-400 uppercase text-center mt-5 mb-2 ">
          Cursos similares
      </div>
      <div class="grid grid-cols-2 gap-4 mb-2">
      @foreach ($course->similar() as $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
            <a href="{{ route('course',$course->slug)}}">
                <img src="{{ $course->image }}" >
                <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
                <h3 class="text-md text-gray-500">{{ $course->excerpt }}</h3>
  
                <img src="{{ $course->user->avatar }}" class="rounded-full mt-4 mx-auto h-12 w-12">
  
            </a>  
        </div> 
      @endforeach
  
    </div>
  </div>

</div>
<div class="text-center mt-8">
  <h1 class="text-3xl text-gray-700 mb-2 uppercase">Últimos Cursos</h1>
  <h2 class="text-xl text-gray-600">Fórmate online como profesional en tecnología</h2>
  <h3 class="text-lg text-gray-600">70% de los graduados duplica sus ingresos</h3>
</div>
<livewire:course-list>
@endsection