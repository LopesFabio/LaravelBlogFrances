<?php

use App\Models\Publier;
use Illuminate\Database\Seeder;

class PubliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Publier::class, 100)->create();
    }
}
