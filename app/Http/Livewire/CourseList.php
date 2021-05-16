<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseList extends Component
{
    public function render()
    {
        return view('livewire.course-list',[
           /*  'courses' => Course::orderBy('id','desc')->take(5)->get() */
           'courses' => Course::latest()->with('user')->take(9)->get(),
           
        ]); 
    }
}
