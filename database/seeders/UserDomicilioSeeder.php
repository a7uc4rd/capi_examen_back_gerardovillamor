<?php

namespace Database\Seeders;

use App\Models\UserDomicilio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDomicilio::factory()->count(100)->create();
    }
}
