<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_new_game(): void
    {
        $response = $this->postJson('/api/v1/game/create', [
            'player1_id' => 1,
            'player2_id' => 2,
        ]);

        $response->assertStatus(200);
        dump($response->getContent());
    }
}
