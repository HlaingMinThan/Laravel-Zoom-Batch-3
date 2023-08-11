<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1 = User::factory()->create([
            'name' => 'Hlaingminthan'
        ]);
        $user2 = User::factory()->create([
            'name' => 'Mg Mg'
        ]);

        Blog::factory(2)->create([
            'user_id' => $user1->id
        ]);
        //mgmg's blog
        Blog::factory()->create([
            'user_id' => $user2->id
        ]);
    }
}
