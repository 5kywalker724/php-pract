<?php
namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'room_type_id',
        'room_square',
        'seats'
    ];
}