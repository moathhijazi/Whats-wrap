<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat_model extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'for_room_id' , 
        'from_id' ,
        'to_id' , 
        'text'  , 
        'media_type' , 
        'media'


    ];
}
