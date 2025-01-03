<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Mail\EnrollCourse;
use Illuminate\Support\Facades\Mail;

class CourseCard extends Component
{
    public Course $course;

    public function showCourse($slug)
    {
        return redirect()->route('show', ['slug' => $slug]);
    }

    public function enrollCourse($course_id, $price)
    {
            // Periksa apakah user sudah login
            if (!Auth::check()) {
                return redirect()->route('login');
            }

            // Periksa apakah user sudah terdaftar pada course
            $user = Auth::user();
            if (Transaction::where('user_id', $user->id)->where('course_id', $course_id)->exists()) {
                session()->flash('error', 'You are already enrolled in this course.');
                return;
            }

            $uuid = Str::uuid();

            Mail::to($user->email)->send(new EnrollCourse($user->name, $course_id, $uuid));

            // Simpan transaksi baru
            Transaction::create([
                'user_id' => $user->id,
                'course_id' => $course_id,
                'amount' => $price,
                'transaction_number' => $uuid,
            ]);

            $courset = Course::find($course_id);
            $courset->increment('total_enrolled');

            session()->flash('success', 'You have successfully enrolled in the course.');
    }
    
    public function render()
    {
        return view('livewire.course-card');
    }
}
