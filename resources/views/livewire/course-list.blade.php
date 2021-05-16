<div class="grid grid-cols-3 gap-4 mt-8 relative">
   @foreach ($courses as $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center relative ">
            <a class="" href="{{ route('course',$course->slug)}}">
                <img  src="{{ $course->image }}" alt="">
                <h2 class="text-lg text-gray-600 truncate uppercase ">{{ $course->name }}</h2>
                <h3 class="text-md text-gray-500 mb-16">{{ $course->excerpt }}</h3>
                <div class="m-4 absolute bottom-0 mx-auto inset-x-0 w-max">
                    <img src="{{ $course->user->avatar }}" class="rounded-full h-16 w-16  ">
                </div>

            </a>  
        </div> 
      
   @endforeach
</div>
