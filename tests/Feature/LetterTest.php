<?php

namespace Tests\Feature;

use App\Models\Letter;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LetterTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\DatabaseSeeder::class);
    }

    public function test_CheckIfCanAssignLetterToNumberWithValidInput(): void
    {
        $numChain = "12345678";
        $response = $this->get(route('apiassign', ['id' => $numChain]));

        $mod = (int)$numChain % 23;
        $expectedLetter = Letter::find($mod + 1)->letter;

        $response->assertStatus(200);
        $response->assertSeeText("$numChain$expectedLetter");
    }
}