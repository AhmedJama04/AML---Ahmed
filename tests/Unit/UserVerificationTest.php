<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;



class UserVerificationTest extends TestCase
{

    use RefreshDatabase;

    public function test_user_can_verify()
    {
        $user = User::factory()->create([
            'name' => 'Ahmed Jama',
            'email' => 'testemail@testemail.com',
            'password' => bcrypt('testpassword'),
        ]);
    }


}
