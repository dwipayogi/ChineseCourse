<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseBuy extends Component
{
    public Course $course;
    public function render()
    {
        return view('livewire.course-buy');
    }
}
