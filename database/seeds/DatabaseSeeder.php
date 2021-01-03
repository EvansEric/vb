<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class, 1)->create()->each(function ($user) {
            factory(\App\Models\Profile::class, 1)->create(['user_id' => $user->id]);
        });
    }
}
