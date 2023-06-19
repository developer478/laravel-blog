<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $customer = new Customer;
        for ($i = 0; $i < 10; $i++){
            
            $customer->insert([
                'first_name' => $faker->firstName(),
                'last_name' =>  $faker->lastName(),
                'email' => $faker->unique()->safeEmail(),
                'address' =>  $faker->address(),
            ]);
        }

    }
}
