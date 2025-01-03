<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {

        $user = Auth::user();

        $courses = $user->transactions()
            ->where('status', 'success')
            ->with('course')
            ->get()
            ->pluck('course');

        return view('livewire.dashboard', [
            'courses' => $courses
        ]);
    }
}
