<?php

use App\Models\Champion;
use Illuminate\Database\Seeder;

class ChampionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Champion::class, 3)->create();
    }
}
