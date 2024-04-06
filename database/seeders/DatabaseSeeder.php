<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role as ModelsRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'password',
        ]);

        User::create([
            'name' => 'Jason',
            'email' => 'jason@gmail.com',
            'password' => 'password',
        ]);
        ModelsRole::create(['name' => 'admin']);
        $user->assignRole('admin');
        $this->call([
            EventSeeder::class,
            MerchandiseSeeder::class,
        ]);
    }
}
