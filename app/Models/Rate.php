<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $fillable=[
        'craftsman_id',
        'rate_value',
        'user_id',
    ];

    //on Rate model
    //the Rate belongs to one  Craftsman
    public function craftsman(){

        return $this->belongsTo(Craftsman::class);

    }
    public function getCraftsmanName(){
        $id = $this->craftsman_id;
        $data = Craftsman::findOrFail($id);
        return $data->name;
    }
    public function getUserName(){
        $id = $this->user_id;
        $data = User::findOrFail($id);
        return $data->name;
    }

}
