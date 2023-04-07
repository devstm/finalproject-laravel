<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NeighborhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(base_path('database/seeders/neighborhoods.json'));
        $data = json_decode($json);

        foreach ($data as $obj){
            DB::table('neighborhoods_name')->insert([
                'id'=>$obj->id,
                'name'=>$obj->name,
                'description'=>$obj->description,
                'city_id' =>$obj->city_id
            ]);

        }

    }
}
