<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all friends
            // Why?
            // Data has been manipulated so much that it makes sence to use fresh data
        // Oterate N times to create that many friends
        // Create a Friend with random data

        \App\Models\Friend::query()->delete();

        foreach(range(1,200) as $number) {
            \App\Models\Friend::create([
                'first_name' => 'John',
                'last_name' => 'Doe',
                'age' => 99
            ]);
        }
    }
}
