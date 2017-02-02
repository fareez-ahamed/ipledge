<?php

use Illuminate\Database\Seeder;

class TrafficPledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pledge::class, 'traffic')->create();
    }
}
