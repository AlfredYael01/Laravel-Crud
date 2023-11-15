<?php

namespace App\Models;


use App\Http\Controllers\EvaluationControler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable =[
        'code',
        'name',
        'coefficient'
    ];

    protected $casts =[
        'id'=> 'integer',
        'coefficient'=> 'integer'

    ];
    public function evaluation()
    {
        return $this->hasMany(EvaluationControler::class);
    }
}
