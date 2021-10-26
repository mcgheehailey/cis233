<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MusicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// Delete all friends
            // Why?
            // Data has been manipulated so much that it makes sence to use fresh data
        // Oterate N times to create that many friends
        // Create a Musician with random data

        \App\Models\Musician::query()->delete();

        // I couldn't figure out how to get faker to work.. I followed the steps in the video and also did some research


        foreach(range(1,200) as $number) {
            \App\Models\Musician::create([
                'first_name' => 'John',
                'last_name' => 'Doe',
                'instrument' => 'Violin',
                'website' => 'https://www.musicanwebsites.com'
            ]);
        }
    }
}
