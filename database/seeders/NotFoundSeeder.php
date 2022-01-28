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
        DB::table('notfound')->insert([
            'message' => 'Ah, sh*t... here we go again!'
        ]);
        DB::table('notfound')->insert([
            'message' => 'This is awkward... this page... was not found...'
        ]);
        DB::table('notfound')->insert([
            'message' => 'Oh, you shouldn\'t be here!'
        ]);
        DB::table('notfound')->insert([
            'message' => 'Heyy, nothing to see hereeee'
        ]);
        DB::table('notfound')->insert([
            'message' => 'Are you serious?'
        ]);
        DB::table('notfound')->insert([
            'message' => 'Lookin\' kinda sus, not gonna lie 👀'
        ]);
        DB::table('notfound')->insert([
            'message' => 'Pdbeh brx vkrxog vwduw zrunlqj...'
        ]);
    }
}
