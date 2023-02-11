<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'id_code',
        'phone',
        'tik_id_qr',
        'addres',
        'id_coleg',
    
    ];
}
