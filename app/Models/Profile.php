<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['craftsman_id','first_name','last_name','martial_status','image_path','description','phone','contact',];
    public function craftsman()
    {
        return $this->belongsTo('Craftsman');
    }

}