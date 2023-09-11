<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ["name", "surname", "dob", "student_number", "email", "image" ];
    protected $casts=[
        "id" => "integer",
        "student_number" => "integer"
    ];

    use HasFactory;
}

