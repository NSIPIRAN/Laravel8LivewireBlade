<div>
   @foreach ($courses as $course)
      <div> {{$course->id}} </div> 
      <div> {{$course->user->name}} </div> 
   @endforeach
</div>
