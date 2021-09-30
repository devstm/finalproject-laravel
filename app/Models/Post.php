<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['craftsman_id','title','body','cover_image'];
    public function profile(){
        return $this->belongsTo('Profile');
    }
    public function getCraftsmanName(){
        $name = $this->craftsman_id;
        $data = Craftsman::findOrFail($name);
        return $data->name;

    }
    public function craftsman()
    {
        return $this->belongsTo('Craftsman');
    }
}
