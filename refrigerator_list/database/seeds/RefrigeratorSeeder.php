<?php

use Illuminate\Database\Seeder;

class RefrigeratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Refrigerator::class, 3)->create();
    }
}
