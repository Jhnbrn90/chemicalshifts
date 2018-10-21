<?php

namespace App;

class ChemicalFormula
{
    protected $formula;
    protected $transformedFormula;

    public function __construct($formula)
    {
        $this->formula = $formula;
    }

    public function transform()
    {
         preg_match_all('/([A-Z][a-z]?)(\d*)/', $this->formula, $matches, PREG_SET_ORDER);

         foreach ($matches as $match) {
             $this->transformedFormula .= $match[1] . '<sub>' . $match[2] . '</sub>';                       
         }

        return $this->transformedFormula;     
    }
}
