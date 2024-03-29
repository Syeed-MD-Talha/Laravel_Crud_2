<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    use HasFactory;
    protected $table = "worker";
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'qualifications'
    ];

}
