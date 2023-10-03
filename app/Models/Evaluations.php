<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ["date", "relation_mod", "title", "coefficients"];
    protected $casts=[
        "date"=>"date",
        "relation_mod"=>"string",
        "title"=>"string",
        "coefficients"=>"integer",
    ];


    use HasFactory;
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function evaluationEleve(){
        return $this->hasMany(EvaluationEleve::class);
    }
}

