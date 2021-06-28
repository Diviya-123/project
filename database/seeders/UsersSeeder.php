<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@abc.com',
            'password' => bcrypt('admin123'),
            'gender'=> 'male',
            'address'=> 'xxx,yyy,zzz-01',
            'phone'=> '112122323',
            'photo' => 'avatar5.png',

        ]);
    }
}
