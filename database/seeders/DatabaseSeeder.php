<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('pelanggans')->insert([
            [
                'nama'    => 'selpi',
                'no_hp'   => '0899912',
                'alamat'  => 'sengeti'
            ],
            [
                'nama'    => 'sipa',
                'no_hp'   => '08234111',
                'alamat'  => 'bahar'
            ],
        ]);
    }
}
