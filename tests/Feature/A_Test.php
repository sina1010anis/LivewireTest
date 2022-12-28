<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class A_Test extends TestCase
{
    public $count;
    public function test_example()
    {
        $response = $this->get('/');
        for($i = 1 ; $i < 200 ; $i++)
            User::where('id' , $i)->update(['remember_token' => Str::random(10)]);
            $this->count++;
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
