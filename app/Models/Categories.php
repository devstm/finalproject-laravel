<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['id', 'name', 'describe'];
    public function crafts()
    {
        return $this->hasMany(Crafts::class,'id');
    }
}
