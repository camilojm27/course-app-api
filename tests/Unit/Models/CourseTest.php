<?php

namespace Tests\Unit\Models;

use App\Models\Course;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class CourseTest extends TestCase
{

    public function test_belongs_to_user()
    {
        $course = Course::factory()->create();
        // dd($course->user)
        $this->assertInstanceOf(User::class, $course->user);
    }
}
