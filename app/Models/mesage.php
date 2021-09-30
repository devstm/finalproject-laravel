<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesage extends Model
{
    use HasFactory;
    protected $table='mesages';
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'content'
    ];
    public function craftsman()
    {
        return $this->belongsTo(Craftsman::class);
    }
    public function getReceiverName(){
        $id = $this->receiver_id;
        $data = Craftsman::findOrFail($id);
        return $data->name;
    }
public function getSenderName(){
        $id = $this->sender_id;
        $data = Craftsman::findOrFail($id);
        return $data->name;
    }
}