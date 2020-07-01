<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('users')->where('email', 'kiko@example.com')->first()) {
            DB::table('users')->insert([
                'name' => 'Kiko Seijo',
                'email' => 'kiko@example.com',
                'password' => app('hash')->make('secret'),
                // 'admin' => 1,
            ]);
        }
    }
}
