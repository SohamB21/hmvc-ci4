<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class StudentSeeder extends Seeder
{
    public function run()
    {
        for($i=0; $i<10; $i++){
        	$this->db->table("students")->insert($this->generateTestStudents());
        }
    }
    public function generateTestStudents()
    {
    	$faker = Factory::create();

    	return [
    		"name" => $faker->name(),
    		"email" => $faker->email,
    		"mobile" => $faker->phoneNumber
    	];
    }
}
