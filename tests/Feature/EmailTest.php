<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Mail\EnrollCourse;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class EmailTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        Mail::fake();

        $user = User::factory()->create();
        $course_id = 1;

        Mail::to('test@example.com')->send(new EnrollCourse($user, $course_id));

        Mail::assertSent(EnrollCourse::class, function ($mail) use ($user, $course_id) {
            return $mail->user->id === $user->id && $mail->course_id === $course_id;
        });
    }
}
