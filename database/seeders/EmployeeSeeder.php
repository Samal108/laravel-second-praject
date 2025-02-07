<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employeeData=[
            [
                "emp_name"=>"chili",
                "emp_salary"=>6000,
                "address_id"=>1
    
            ],

            [
                "emp_name"=>"chili2",
                "emp_salary"=>7000,
                "address_id"=>2
    
            ],

            [
                "emp_name"=>"chili3",
                "emp_salary"=>6000,
                "address_id"=>3
    
            ]
        ];
        
        Employee::insert([
            "emp_name"=>"chili4",
                "emp_salary"=>5000,
                "address_id"=>1
    

        ]);
        //Employee::insert($employeeData);
        //DB::table("employee")->insert($employeeData);
    }
}
