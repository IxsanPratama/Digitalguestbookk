<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('guestbook')->insert([
        //     'name' => 'Andi',
        //     'from' => 'Cimahi',
        //     'agenda' => 'tamu khusus',
        // ]);
     \App\Models\Guestbook::factory(100)->create();
    }
}
