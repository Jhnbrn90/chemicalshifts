<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ChemicalShift extends Model
{
    protected $casts = [
        'value' => 'float',
    ];

    public function compound() {
        return $this->belongsTo(Compound::class);
    }
}
