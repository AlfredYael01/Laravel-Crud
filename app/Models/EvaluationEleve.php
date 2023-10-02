<?php

namespace App\Models;

use App\Http\Controllers\Evaluation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationEleve extends Model
{
    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
    public function evaluation()
    {
       return $this->hasOne(Evaluation::class);
    }

    protected $primaryKey ='id';
    protected $fillable =['note'];
    protected $casts=[
        'note'=>'float',
    ];
}
