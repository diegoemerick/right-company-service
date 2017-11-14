<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i<10; $i++) {
            array_push($companies, [
                'name' => $faker->company,
                'activity' => $faker->jobTitle
            ]);
        }

        DB::table('companies')->insert($companies);
    }
}