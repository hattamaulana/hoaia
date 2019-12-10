<?php

use App\Models\Forests;
use Illuminate\Database\Seeder;

class ForestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Forests::class, 25)->create();
    }
}
