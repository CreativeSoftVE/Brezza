<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BenefitsTableSeeder::class);
        $this->call(WhoaresTableSeeder::class);
        $this->call(StepsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(FootersTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
