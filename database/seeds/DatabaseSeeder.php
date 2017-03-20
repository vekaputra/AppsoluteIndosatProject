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
	    $this->call(SalesSeeder::class);
        $this->call(AdminSeeder::class);
	    $this->call(EventSeeder::class);
    }
}
