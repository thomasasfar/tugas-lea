<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'no_hp'
    ];

    protected $hidden = [
        'password'
    ];
}
