<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'firstname' => 'Administrator',
            'lastname' => '',
            'username' => 'Administrator',
            'email' => 'admin@shareddutchflat.de',
            'password' => 'Administrator',
            'is_admin' => true
        ]);

        DB::table('users')->delete();
        User::create([
            'firstname' => 'Markus',
            'lastname' => 'Mustermann',
            'username' => 'markus',
            'email' => 'markus@mustermann.de',
            'password' => '1234'
        ]);
    }
}
