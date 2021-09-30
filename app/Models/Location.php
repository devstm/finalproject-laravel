<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table='locations';
    protected $fillable = ['city_id', 'neighborhood_id', 'street'];
    public function craftsmen()
    {
        return $this->belongsToMany(Craftsman::class);
    }
    public function getCityName(){
        $city = $this->city_id;
        $data = City::findOrFail($city);
        return $data->name;
    }

    public function getNeighborhoodsName()
    {
        $neighborhoods = $this->neighborhood_id;
        $data = Neighborhoods::findOrFail($neighborhoods);
        return $data->name;
    }


}
