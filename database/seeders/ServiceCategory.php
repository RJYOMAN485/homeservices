<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                "name" => "Plumbing",
                "slug" => "plumbing",
                "image" => "1.jpg"
            ],
            [
                "name" => "Beauty",
                "slug" => "beauty",
                "image" => "1.jpg"
            ],
            [
                "name" => "Electrical",
                "slug" => "electrical",
                "image" => "1.jpg"
            ],
            [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1.jpg"
            ]
        ]);
    }
}
