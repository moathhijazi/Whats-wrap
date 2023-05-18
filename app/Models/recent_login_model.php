<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recent_login_model extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'ip' , 
        'account_id' 
         
    ];
}
