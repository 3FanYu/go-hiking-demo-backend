<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFetchCollectionWithoutSecureCode()
    {
        $response = $this->getJson('/api/collection/0');
        $response->assertStatus(403);
    }
    public function testFetchCollectionWithSecureCode()
    {
        $response = $this->withHeaders([
            'X-Secure-Code' => '12345678',
        ])->getJson('/api/collection/0');
        $response
            ->assertStatus(200)
            ->assertJsonPath('title', '親子步道')
            ->assertJsonStructure([
                'id',
                'title',
                'subTitle',
                'rank',
                'bgColor',
                'iconImage',
                'trails',
            ]);
    }
}
