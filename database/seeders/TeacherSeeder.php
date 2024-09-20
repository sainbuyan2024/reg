<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->delete();
        $datas=[
            ['id'=>1,'firstName'=>'Дүгэрсүрэн', 'lastName'=>'Батцэнд', 'gender'=>'Эрэгтэй','phoneNumber'=>'99889523'],
            ['id'=>2,'firstName'=>'Дүгэрсүрэн', 'lastName'=>'Батцэнд', 'gender'=>'Эрэгтэй','phoneNumber'=>'99889523'],
            ['id'=>3,'firstName'=>'Дүгэрсүрэн', 'lastName'=>'Батцэнд', 'gender'=>'Эрэгтэй','phoneNumber'=>'99889523'],
            ['id'=>4,'firstName'=>'Дүгэрсүрэн', 'lastName'=>'Батцэнд', 'gender'=>'Эрэгтэй','phoneNumber'=>'99889523'],
            
        ];
        DB::table('teachers')->insert($datas);
    }
}
