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
        Eloquent::unguard();

        $this->call('CommentsTableSeeder');
        $this->command->info('Comments table seeded.');
        // $this->call(UsersTableSeeder::class);
    }
}
