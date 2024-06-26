<?php

namespace Tests\Feature\Models;

use App\Models\Merchandise;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class MerchandiseTest extends TestCase
{

    /**
     * Test view create merchandise form as admin
     */
    public function test_create_merchandise_form_can_be_rendered(): void
    {
        $user = User::findOrFail(1);

        $response = $this->actingAs($user)->get('/merchandise/create');

        $response->assertStatus(200);
    }

    /*
    * Test view create merchandise form without permission
    */
    public function test_create_merchandise_form_cannot_be_accessed(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/merchandise/create');

        $response->assertStatus(403); //unauthorized
    }

    /**
     * Test adding merchandise with passed validation
     *
     */

    public function test_merchandise_can_be_added()
    {
        $user = User::findOrFail(1);
        Storage::fake('avatars');

        $response = $this->actingAs($user)->post('/merchandise', [
            'name' => 'Test item',
            'description' => 'This is a description',
            'price' => '10.20',
            'image' => UploadedFile::fake()->image('avatar.jpg'),
            'stock_quantity' => 100,
            'category' => 'cap',
        ]);

        $response->assertValid()
            ->assertStatus(302) //redirect
            ->assertRedirect(route('merchandise.index'));
    }

    /**
     * Test adding merchandise with failed validation
     */
    public function test_merchandise_cannot_be_added()
    {
        $user = User::findOrFail(1);

        $response = $this->actingAs($user)->post('/merchandise', [
            'name' => 123,
            'description' => 123,
            'price' => '100.2130',
            'image' => 'abc',
            'stock_quantity' => -100,
            'category' => 'cap',
        ]);

        $response->assertInvalid(['price', 'image', 'stock_quantity']);
    }

    /**
     * Test view merchandise list
     */
    public function test_merchandise_list_can_be_view()
    {
        $user = User::findOrFail(1);

        $response = $this->actingAs($user)->get('/merchandise');

        $response->assertStatus(200);
    }

    /**
     * Test view merchandise list without authorizarion
     */
    public function test_merchandise_list_cannot_be_accessed()
    {
        $user = User::findOrFail(2);

        $response = $this->actingAs($user)->get('/merchandise');

        $response->assertStatus(403);
    }

    /**
     * Test dashboard merchandise list can search by category
     */
    public function test_dashboard_merchandise_list_can_search_by_category()
    {
        $user = User::findOrFail(2);

        $response = $this->actingAs($user)->post('/merchandise-search', [
            'search_category' => 'cap'
        ]);

        $response->assertStatus(200);
    }

    /**
     * Test dashboard merchandise list can search by name
     */
    public function test_dashboard_merchandise_list_can_search_by_name()
    {
        $user = User::findOrFail(2);

        $response = $this->actingAs($user)->post('/merchandise-search', [
            'search_query' => 'a'
        ]);

        $response->assertStatus(200);
    }


    /**
     * Test dashboard merchandise list can search by category and name
     */
    public function test_dashboard_merchandise_list_can_search_by_category_and_name()
    {
        $user = User::findOrFail(2);

        $response = $this->actingAs($user)->post('/merchandise-search', [
            'search_query' => 'a',
            'search_category' => 'poster'
        ]);

        $response->assertStatus(200);
    }

    /**
     * Test view archived merchandise list as admin
     */
    public function test_archived_merchandise_list_can_rendered()
    {
        $user = User::findOrFail(1);

        $response = $this->actingAs($user)->get('/merchandise-archived');

        $response->assertStatus(200);
    }

    /**
     * Test view archived merchandise list without authentication
     */
    public function test_archived_merchandise_list_cannot_be_accessed()
    {
        $user = User::findOrFail(2);

        $response = $this->actingAs($user)->get('/merchandise-archived');

        $response->assertStatus(403);
    }

    /**
     * Test archive a merchandise
     */
    public function test_archive_a_merchandise()
    {
        $user = User::findOrFail(1);

        $merchandise = Merchandise::factory()->create();

        $response = $this->actingAs($user)->delete(route('merchandise.destroy', $merchandise));

        $response->assertStatus(302);
        $this->assertSoftDeleted($merchandise);
    }

    /**
     * Test view edit merchandise form
     */
    public function test_edit_merchandise_form_can_be_rendered()
    {
        $user = User::findOrFail(1);
        $merchandise = Merchandise::factory()->create();

        $response = $this->actingAs($user)->get(route('merchandise.edit', $merchandise));

        $merchandise->forceDelete();
        $response->assertStatus(200);
    }

    /**
     * Test view merchandise list without authorizarion
     */
    public function test_edit_merchandise_form_cannot_be_accessed()
    {
        $user = User::findOrFail(2);
        $merchandise = Merchandise::factory()->create();

        $response = $this->actingAs($user)->get(route('merchandise.edit', $merchandise));

        $merchandise->forceDelete();
        $response->assertStatus(403);
    }

    /**
     * Test update a merchandise with passed validation
     *
     */
    public function test_merchandise_can_be_updated()
    {
        $user = User::findOrFail(1);
        Storage::fake('avatars');
        $merchandise = Merchandise::factory()->create();

        $response = $this->actingAs($user)->patch(route('merchandise.update', $merchandise), [
            'name' => 'updated Test item',
            'description' => 'This is a updated description',
            'price' => '100.10',
            'stock_quantity' => 666,
            'category' => 'cap',
        ]);

        $response->assertValid()
            ->assertStatus(302) //redirect
            ->assertRedirect(route('merchandise.index'));
        $merchandise->forceDelete();
    }


    /**
     * Test update a merchandise with failed validation
     */
    public function test_merchandise_cannot_be_updated()
    {
        $user = User::findOrFail(1);
        $merchandise = Merchandise::factory()->create();

        $response = $this->actingAs($user)->patch(route('merchandise.update', $merchandise), [
            'name' => 123,
            'description' => 123,
            'price' => '100.2130',
            'image' => 'abc',
            'stock_quantity' => -100,
            'category' => 'cap',
        ]);

        $response->assertInvalid(['price', 'image', 'stock_quantity']);
        $merchandise->forceDelete();
    }
}
