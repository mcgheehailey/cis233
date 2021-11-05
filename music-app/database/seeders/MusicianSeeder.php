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


        foreach(range(1,50) as $number) {
            \App\Models\Musician::create([
                'first_name' => 'Adrian',
                'last_name' => 'Urie',
                'instrument' => 'Guitar',
                'website' => 'https://www.musicanwebsites.com'
            ]);
            \App\Models\Musician::create([
                'first_name' => 'Delilah',
                'last_name' => 'Bevens',
                'instrument' => 'Drums',
                'website' => 'https://www.musicanwebsites.com'
            ]);
            \App\Models\Musician::create([
                'first_name' => 'Hailey',
                'last_name' => 'McGhee',
                'instrument' => 'Violin',
                'website' => 'https://www.musicanwebsites.com'
            ]);
            \App\Models\Musician::create([
                'first_name' => 'John',
                'last_name' => 'Doe',
                'instrument' => 'Xylophone',
                'website' => 'https://www.musicanwebsites.com'
            ]);
            \App\Models\Musician::create([
                'first_name' => 'Azuri',
                'last_name' => 'Taylor',
                'instrument' => 'Trombone',
                'website' => 'https://www.musicanwebsites.com'
            ]);
            \App\Models\Musician::create([
                'first_name' => 'Sharrae',
                'last_name' => 'Spink',
                'instrument' => 'Trombone',
                'website' => 'https://www.musicanwebsites.com'
            ]);
        }
    }
}
