<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Employee;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::factory()->count(100)->create();
        City::factory()->count(100)->create();
        Shop::factory()->count(100)->create();
        Employee::factory()->count(100)->create();
    }
}
