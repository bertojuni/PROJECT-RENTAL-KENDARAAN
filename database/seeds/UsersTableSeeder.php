<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['full_name'  => 'berto juni krisnanto',
            'email'      => 'bertojunikrisnanto@gmail.com',
            'username'   => 'bertojuni',
            'password'   => bcrypt('junijuni008'),
            'avatar'     => '898192462.png'
        ]);
    }
}
