<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Swapan Kumar Mondal',
            'user_id' => '3',
            'gender' => 0,
            'email' => 'sayed@gmail1.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);



        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Mamunur Rashid',
            'user_id' => '50',
            'gender' => 0,
            'email' => 'sayed@gmail2.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Sumaya Akter',
            'user_id' => '27',
            'gender' => 0,
            'email' => 'sayed@gmail3.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Azharul Islam',
            'user_id' => '29',
            'gender' => 0,
            'email' => 'sayed@gmail4.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Rigan Barua',
            'user_id' => '832',
            'gender' => 0,
            'email' => 'sayed@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Shuman Paul',
            'user_id' => '6',
            'gender' => 0,
            'email' => 'sayed@gmail6.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Dalia Khanam',
            'user_id' => '19',
            'gender' => 0,
            'email' => 'sayed@gmail7.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Md. Rashidul Islam',
            'user_id' => '837',
            'gender' => 0,
            'email' => 'sayed@gmail8.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Daluar Hossain Talukdar',
            'user_id' => '59',
            'gender' => 0,
            'email' => 'sayed@gmail9.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Md. Faruk Ahmmed',
            'user_id' => '35',
            'gender' => 0,
            'email' => 'sayed@gmail10.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Munni Akter Asfha',
            'user_id' => '17',
            'gender' => 0,
            'email' => 'sayed@gmail11.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Sabina Akter',
            'user_id' => '822',
            'gender' => 0,
            'email' => 'sayed@gmail12.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Fatema Akter moni',
            'user_id' => '824',
            'gender' => 0,
            'email' => 'sayed@gmail13.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Hafsana Afroz',
            'user_id' => '819',
            'gender' => 0,
            'email' => 'sayed@gmail14.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Farhana Tasnim',
            'user_id' => '844',
            'gender' => 0,
            'email' => 'sayed@gmail15.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Mehedi Hasan',
            'user_id' => '856',
            'gender' => 0,
            'email' => 'sayed@gmail16.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Mareym Akther Bristy',
            'user_id' => '828',
            'gender' => 0,
            'email' => 'sayed@gmail17.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Bikash',
            'user_id' => '841',
            'gender' => 0,
            'email' => 'sayed@gmail17.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Amit Sen',
            'user_id' => '840',
            'gender' => 0,
            'email' => 'sayed@gmail18.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Ishrat Jahan Shimu',
            'user_id' => '827',
            'gender' => 0,
            'email' => 'sayed@gmail19.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Anika Tahsin',
            'user_id' => '825',
            'gender' => 0,
            'email' => 'sayed@gmail20.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Urmi Hore',
            'user_id' => '829',
            'gender' => 0,
            'email' => 'sayed@gmail21.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Sumona Saha',
            'user_id' => '858',
            'gender' => 0,
            'email' => 'sayed@gmail22.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Md. Atour Hossen',
            'user_id' => '835',
            'gender' => 0,
            'email' => 'sayed@gmail23.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Robin',
            'user_id' => '855',
            'gender' => 0,
            'email' => 'sayed@gmail24.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Afrin Akter Asma',
            'user_id' => '847',
            'gender' => 0,
            'email' => 'sayed@gmail25.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Nila Akter',
            'user_id' => '811',
            'gender' => 0,
            'email' => 'sayed@gmail26.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Protiva Roy',
            'user_id' => '815',
            'gender' => 0,
            'email' => 'sayed@gmail27.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Sadia Islam Ria',
            'user_id' => '820',
            'gender' => 0,
            'email' => 'sayed@gmail28.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Fatema Tuz Zohura',
            'user_id' => '813',
            'gender' => 0,
            'email' => 'sayed@gmail29.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Silvia khatun',
            'user_id' => '846',
            'gender' => 0,
            'email' => 'sayed@gmail30.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Mitu Akter',
            'user_id' => '857',
            'gender' => 0,
            'email' => 'sayed@gmail31.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Nurjahan Akter Pallabi',
            'user_id' => '812',
            'gender' => 0,
            'email' => 'sayed@gmail32.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Golam Sorwar',
            'user_id' => '836',
            'gender' => 0,
            'email' => 'sayed@gmail33.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Golam Sorwar',
            'user_id' => '836',
            'gender' => 0,
            'email' => 'sayed@gmail34.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Md. Ronju Mia',
            'user_id' => '862',
            'gender' => 0,
            'email' => 'sayed@gmail35.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Tithi Chakrabarty',
            'user_id' => '869',
            'gender' => 0,
            'email' => 'sayed@gmail36.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Nazmim Akter',
            'user_id' => '871',
            'gender' => 0,
            'email' => 'sayed@gmail37.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Lipi Begum',
            'user_id' => '875',
            'gender' => 0,
            'email' => 'sayed@gmail38.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Hazera Ali Popy',
            'user_id' => '874',
            'gender' => 0,
            'email' => 'sayed@gmail39.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Harun-or-Rasid',
            'user_id' => '905',
            'gender' => 0,
            'email' => 'sayed@gmail40.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Mosa. Naznin Akter',
            'user_id' => '879',
            'gender' => 0,
            'email' => 'sayed@gmail41.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Sorme Akter',
            'user_id' => '881',
            'gender' => 0,
            'email' => 'sayed@gmail42.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Abdur Rahman',
            'user_id' => '889',
            'gender' => 0,
            'email' => 'sayed@gmail500245454.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Alifa Rahman',
            'user_id' => '880',
            'gender' => 0,
            'email' => 'sayed@gmail44.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Md. Maunur Bassar',
            'user_id' => '884',
            'gender' => 0,
            'email' => 'sayed@gmail47.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Sheikh Rokeya Raina',
            'user_id' => '886',
            'gender' => 0,
            'email' => 'sayed@gmail48.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Umma Fatima Sharmin',
            'user_id' => '915',
            'gender' => 0,
            'email' => 'sayed@gmail49.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Syed Fuad Nasher Fahad',
            'user_id' => '888',
            'gender' => 0,
            'email' => 'sayed@gmail50.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Silpy Akter Shamoly',
            'user_id' => '891',
            'gender' => 0,
            'email' => 'sayed@gmail51.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Hafsa Begum Tonima',
            'user_id' => '892',
            'gender' => 0,
            'email' => 'sayed@gmail52.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Nibedita',
            'user_id' => '894',
            'gender' => 0,
            'email' => 'sayed@gmail53.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Afroja Akter',
            'user_id' => '893',
            'gender' => 0,
            'email' => 'sayed@gmail54.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);
        DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Salma',
            'user_id' => '890',
            'gender' => 0,
            'email' => 'salma@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

          DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Murad',
            'user_id' => '898',
            'gender' => 0,
            'email' => 'murad@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

          DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'MD.AL-Amin Mia',
            'user_id' => '897',
            'gender' => 0,
            'email' => 'alamin@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

          DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Aurnab Devnath',
            'user_id' => '895',
            'gender' => 0,
            'email' => 'aurnab@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

            DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Tareq Rahman',
            'user_id' => '896',
            'gender' => 0,
            'email' => 'aurnab@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

         DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Sourav Das Gupta',
            'user_id' => '899',
            'gender' => 0,
            'email' => 'das@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

         DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Moni Khatun',
            'user_id' => '901',
            'gender' => 0,
            'email' => 'moni@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

         DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Md.Faisal',
            'user_id' => '900',
            'gender' => 0,
            'email' => 'faisal@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

            DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Shraboni Rani Golder',
            'user_id' => '906',
            'gender' => 0,
            'email' => 'rani@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

            DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Abu Shahin Beg',
            'user_id' => '916',
            'gender' => 0,
            'email' => 'shahin@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

          DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Md. Aziz-Ul-Hakim',
            'user_id' => '909',
            'gender' => 0,
            'email' => 'aziz@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

          DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Shamima Islam',
            'user_id' => '902',
            'gender' => 0,
            'email' => 'shamima@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

         DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Suriya Khanam',
            'user_id' => '905',
            'gender' => 0,
            'email' => 'suriya@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);

         DB::table('employees')->insert([
            'office' => '2',
            'department' => '1',
            'name' => 'Jannatul Naim',
            'user_id' => '904',
            'gender' => 0,
            'email' => 'jannatul@gmail5.com',
            'date_of_birth' => '2023-04-25',
            'join_date' => '2023-04-17',
            'sallary' => '20000',
            'contact_number' => '012554465548',
            'employee_status' => 'Fulltime',
            'designation' => 'Manager',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);


         DB::table('employees')->insert([
                    'office' => '2',
                    'department' => '1',
                    'name' => 'Md. Sakibul Islam Majumder',
                    'user_id' => '912',
                    'gender' => 0,
                    'email' => 'islam@gmail5.com',
                    'date_of_birth' => '2023-04-25',
                    'join_date' => '2023-04-17',
                    'sallary' => '20000',
                    'contact_number' => '012554465548',
                    'employee_status' => 'Fulltime',
                    'designation' => 'Manager',
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'created_by' => 1
                ]);

                DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Tariqul Islam',
                'user_id' => '911',
                'gender' => 0,
                'email' => 'tareq@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                    DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Md. Riaduzzaman',
                'user_id' => '914',
                'gender' => 0,
                'email' => 'riaduzzaman@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                    DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Rabby Ataher',
                'user_id' => '913',
                'gender' => 0,
                'email' => 'rabby@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Halima Akter',
                'user_id' => '903',
                'gender' => 0,
                'email' => 'halima@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Khadijatul Kubra',
                'user_id' => '907',
                'gender' => 0,
                'email' => 'kurba@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Md. Farhad Ahmmed Mollick',
                'user_id' => '915',
                'gender' => 0,
                'email' => 'farhad@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Afsana Rahman',
                'user_id' => '908',
                'gender' => 0,
                'email' => 'afsana@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Sariful Islam',
                'user_id' => '910',
                'gender' => 0,
                'email' => 'sariful@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Thamina Akter',
                'user_id' => '917',
                'gender' => 0,
                'email' => 'akter@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Foysal Azam',
                'user_id' => '918',
                'gender' => 0,
                'email' => 'foysal@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Ismail Hossain',
                'user_id' => '919',
                'gender' => 0,
                'email' => 'ismail@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

                DB::table('employees')->insert([
                'office' => '2',
                'department' => '1',
                'name' => 'Md. Hefzur Rahman',
                'user_id' => '920',
                'gender' => 0,
                'email' => 'hafezur@gmail5.com',
                'date_of_birth' => '2023-04-25',
                'join_date' => '2023-04-17',
                'sallary' => '20000',
                'contact_number' => '012554465548',
                'employee_status' => 'Fulltime',
                'designation' => 'Manager',
                'status' => 1,
                'created_at' => Carbon::now(),
                'created_by' => 1
            ]);

    }
}