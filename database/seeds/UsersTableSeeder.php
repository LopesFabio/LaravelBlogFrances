<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fabio Lopes',
            'email' => 'fabio@3ktecnologia.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
