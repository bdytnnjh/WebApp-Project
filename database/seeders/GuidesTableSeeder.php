<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'description' => 'An experienced guide with a passion for history and culture.',
                'price' => 0.00,
                'image_url' => 'https://example.com/images/john_doe.jpg',
            ],
            [
                'name' => 'Gong Yoo',
                'description' => 'A nature enthusiast who loves to explore the great outdoors.',
                'price' => 0.00,
                'image_url' => 'https://example.com/images/jane_smith.jpg',
            ],
            [
                'name' => 'Nuzul',
                'description' => 'A local expert who knows all the hidden gems of the city.',
                'price' => 0.00,
                'image_url' => 'https://example.com/images/emily_johnson.jpg',
            ],
        ];

        // Insert sample data into the guides table
        foreach ($guides as $guide) {
            Guide::create($guide);
    }
    }
}
