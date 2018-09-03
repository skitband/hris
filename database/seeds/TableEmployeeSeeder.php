<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TableEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$faker = Faker\Factory::create();
        $faker = Faker\Factory::create('en_PH');

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('employees')->insert([ //,
                'emp_id' 		 => date('y').'-'.sprintf('%04d',$i),
                'first_name' 	 => $faker->firstName,
                'last_name' 	 => $faker->lastName,
                'middle_name'    => $faker->lastName,
                'birthdate'      => $faker->date,
                'address' 		 => $faker->address,
                'job' 			 => $faker->jobTitle
            ]);
        }

        $limit1 = 50;

        for ($i = 0; $i < $limit1; $i++) {
            DB::table('users')->insert([ //,
                'emp_id' 		 => date('y').'-'.sprintf('%04d',$i),
                'username' 	 	 => $faker->username,
                'email' 	     => $faker->email,
                'password'       => Hash::make($faker->password)
            ]);
        }
    }
}
