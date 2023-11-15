<?php

namespace App\Models;

use App\Http\Controllers\EvaluationControler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationEleve extends Model
{
    public function eleve()
    {
        return $this->hasOne(Eleve::class, 'id', 'eleve_id');
    }
    public function evaluation()
    {
       return $this->belongsTo(EvaluationControler::class);
    }

    protected $primaryKey ='id';
    protected $fillable =['note'];
    protected $casts=[
        'note'=>'float',
    ];
}
