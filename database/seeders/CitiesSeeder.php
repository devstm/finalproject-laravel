<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('C:\xampp\htdocs\CraftsmanProject-main\database\seeders\cities.json');
        $data = json_decode($json);

        foreach ($data as $obj){
            DB::table('cities')->insert([
                'id'=>$obj->id,
                'name'=>$obj->name,
                'description'=>$obj->description,
            ]);

        }

    }
}
