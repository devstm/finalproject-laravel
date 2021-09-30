<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crafts extends Model
{
    use HasFactory;
    protected $table = 'crafts';
    protected $fillable = ['id', 'name', 'describe','category_id'];
    public function category()
    {
        return $this->belongsTo(Categories::class,'id');
    }
    public function craftsman()
    {
        return $this->belongsToMany(Craftsman::class , 'craftsman_crafts');
    }
}
