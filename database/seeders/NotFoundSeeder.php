<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotFoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('404')->insert([
            'message' => 'Ah, sh*t... here we go again!'
        ]);
        DB::table('404')->insert([
            'message' => 'This is awkward... this page... was not found...'
        ]);
        DB::table('404')->insert([
            'message' => 'Oh, you shouldn\'t be here!'
        ]);
        DB::table('404')->insert([
            'message' => 'Heyy, nothing to see hereeee'
        ]);
        DB::table('404')->insert([
            'message' => 'Are you serious?'
        ]);
        DB::table('404')->insert([
            'message' => 'Lookin\' kinda sus, not gonna lie 👀'
        ]);
        DB::table('404')->insert([
            'message' => 'Pdbeh brx vkrxog vwduw zrunlqj...'
        ]);
    }
}
