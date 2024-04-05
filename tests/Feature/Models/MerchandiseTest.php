<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class MerchandiseTest extends TestCase
{

    /**
     * A basic test example.
     */
    public function test_create_merchandise_form_can_be_rendered(): void
    {
        $user = User::findOrFail(1)->first();

        $response = $this->actingAs($user)->get('/merchandise/create');

        $response->assertStatus(200);
    }

    /**
     * Test adding merchandise with passed validation
     *
     */

    public function test_merchandise_can_be_added()
    {
        $user = User::findOrFail(1)->first();

        $response = $this->actingAs($user)->post('/merchandise', [
            'name' => 'Test item',
            'desc' => 'This is a description',
            'price' => 10.20,
            'image' => Http::get(fake()->imageUrl())->body(),
            'stock_quantity' => 100,
            'category' => 'cap',
        ]);

        $response->assertValid()->assertStatus(200);
    }

    /**
     * Test adding merchandise with failed validation
     */
    public function test_merchandise_cannot_be_added()
    {
        $user = User::findOrFail(1)->first();

        $response = $this->actingAs($user)->post('/merchandise', [
            'name' => 123,
            'desc' => 123,
            'price' => '100.20',
            'image' => 'abc',
            'stock_quantity' => '100',
            'category' => 'cap',
        ]);

        $response->assertInvalid(['name', 'description', 'price', 'image', 'stock_quantity'])
            ->assertStatus(422);
    }
}
