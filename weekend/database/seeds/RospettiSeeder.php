<?php

use App\Rospetto;
use Illuminate\Database\Seeder;

class RospettiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rospetto::class, 100) -> create();
    }
}
