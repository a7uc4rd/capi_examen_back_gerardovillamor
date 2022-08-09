<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(100)->create();
        /*
        DB::table('users')->insert([
            'name' => 'jhon doe',
            'email' => 'demo@demo.com',
            'password' => '$53234Rf$',
            'fecha_nacimiento' => '1981-04-28',

        ]);
        */
    }
}
