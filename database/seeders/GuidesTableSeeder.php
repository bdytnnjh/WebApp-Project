<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guide;

class GuidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample data for guides
        $guides = [
            [
                'name' => 'Dong Wook',
                'email' => 'dongwook@example.com', // Added email
                'phone_number' => '123-456-7890', // Added phone number
                'description' => 'An experienced guide with a passion for history and culture.',
            ],
            [
                'name' => 'Gong Yoo',
                'email' => 'gongyoo@example.com', // Added email
                'phone_number' => '234-567-8901', // Added phone number
                'description' => 'A nature enthusiast who loves to explore the great outdoors.',
            ],
            [
                'name' => 'Nuzul',
                'email' => 'nuzul@example.com', // Added email
                'phone_number' => '345-678-9012', // Added phone number
                'description' => 'A local expert who knows all the hidden gems of the city.',
            ],
        ];

        // Insert sample data into the guides table
        foreach ($guides as $guide) {
            Guide::create($guide);
        } // Closing brace for the foreach loop
    } // Closing brace for the run method
}
