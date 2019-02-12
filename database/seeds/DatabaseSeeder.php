<?php

use Illuminate\Database\Seeder;
use App\User;
use App\ProductType;

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
        ProductType::create([
        	'name' => 'Máy tính'
        ]);
        ProductType::create([
            'name' => 'Điện thoại'
        ]);
    }
}