<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable = [
        'nommatiere', 'titredecours', 'maincours','enseignant_id','document','key','nameofteacher',
    ];
}
