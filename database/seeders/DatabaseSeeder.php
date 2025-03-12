<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create();
        Admin::factory(10)->create();
        // Customer::factory(10)->create();
        Category::factory(10)->create();
        Product::factory(50)->create();
        Contact::factory(count: 10)->create();


        // Call the AdminNewsSeeder
        // $this->call(AdminNewsSeeder::class);



    }
}
