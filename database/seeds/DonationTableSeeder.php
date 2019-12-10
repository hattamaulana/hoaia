<?php

use App\Models\Donations;
use Illuminate\Database\Seeder;

class DonationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Donations::class, 25)->create();
    }
}
