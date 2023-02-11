<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addformperson extends Model
{
    use HasFactory;
    protected $table = 'forminserting';
    protected $fillable = [
        'name',
        'email',
        'password_',
      
    
    ];
}


