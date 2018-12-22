<?php

use Illuminate\Database\Seeder;

class PapersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create();
        factory(\App\Models\Category::class, 3)->create();
        factory(\App\Models\Paper::class, 10)->create();
    }
}
