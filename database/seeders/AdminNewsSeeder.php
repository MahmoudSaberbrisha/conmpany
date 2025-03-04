<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adminnews')->insert([
            [
                'adminname' => 'Admin 1',
                'disc' => 'This is a sample announcement from Admin 1.',
                'image' => 'image1.jpg',
                'datatime' => now(),
            ],
            [
                'adminname' => 'Admin 2',
                'disc' => 'This is a sample announcement from Admin 2.',
                'image' => 'image2.jpg',
                'datatime' => now(),
            ],
            // Add more sample data as needed
        ]);
    }
}
