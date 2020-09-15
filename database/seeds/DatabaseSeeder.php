<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(FabricsTypeSeeder::class);
        $this->call(FabricSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
