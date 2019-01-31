<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserSeeder');
    }
}

/**
 * summary
 */
class UserSeeder extends Seeder
{
    /**
     * summary
     */
    public function run()
    {
        User::create([
        	'name' => 'Duong Tung Lam',
        	'email' => 'duongtunglam191@gmail.com',
        	'password' => Hash::make(123456),
        	'level' => 1
        ]);
    }
}