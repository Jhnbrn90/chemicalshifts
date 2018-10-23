<?php

namespace App;

use App\ChemicalFormula;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ChemicalShift extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'value' => 'float',
    ];

    public function compound()
    {
        return $this->belongsTo(Compound::class);
    }

    public function getFormattedOrigin()
    {
        return (new ChemicalFormula($this->origin))->transform();   
    }
}
