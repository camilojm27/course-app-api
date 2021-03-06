<?php

namespace Tests\Unit\Models;

use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function test_has_many_courses()
    {
        $user = new User;
        $this->assertInstanceOf(Collection::class, $user->courses);
    }
}
