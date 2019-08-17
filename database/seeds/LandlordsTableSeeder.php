<?php

use Illuminate\Database\Seeder;
use App\Landlord;
class LandlordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Landlord::class, 10)->create();
    }
}
