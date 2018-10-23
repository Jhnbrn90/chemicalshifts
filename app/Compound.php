<?php

namespace App;

use App\ChemicalShift;
use Illuminate\Database\Eloquent\Model;

class Compound extends Model
{
    protected $guarded = [];

    public function shifts()
    {
        return $this->hasMany(ChemicalShift::class);   
    }
}
