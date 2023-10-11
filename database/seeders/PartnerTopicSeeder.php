<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partner_topic')->insert([
            'partner_id' => 1,
            'topic_id' => 1
        ]);

        DB::table('partner_topic')->insert([
            'partner_id' => 2,
            'topic_id' => 2
        ]);

        DB::table('partner_topic')->insert([
            'partner_id' => 3,
            'topic_id' => 3
        ]);
    }
}
