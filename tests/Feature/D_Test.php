<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class D_Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public $count;
    public function test_example()
    {

        for($i = 1 ; $i < 200 ; $i++)
            User::find($i)->update(['password' => Str::random(10)]);

            $this->count++;

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
