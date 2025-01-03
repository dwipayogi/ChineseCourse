<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseSection extends Component
{
    public string $title;
    public string $type;
    
    public function render()
    {
        $courses = match($this->type) {
            'all' => Course::all(),
            'featured' => Course::where('status', 'featured')->get(),
            'new' => Course::latest()->take(3)->get(),
            default => collect(),
        };

        return view('livewire.course-section', [
            'courses' => $courses
        ]);
    }
}
