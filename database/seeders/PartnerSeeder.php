<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partners')->insert([
            'username' => 'jdeleon',
            'name' => 'Joaquin',
            'lastname' => 'De Leon',
            'role_id' => '2'
        ]);

        DB::table('partners')->insert([
            'username' => 'mhuerta',
            'name' => 'Monica',
            'lastname' => 'Huerta Muñoz',
            'role_id' => '2'
        ]);

        DB::table('partners')->insert([
            'username' => 'ivargas',
            'name' => 'Ismael',
            'lastname' => 'Vargas Martinez',
            'role_id' => '2'
        ]);
    }
}
