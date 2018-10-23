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

    public function transformNucleus()
    {
        preg_match_all('/(\d+)([A-Z])/', $this->formula, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            $this->transformedFormula .= '<sup>' . $match[1] . '</sup>' . $match[2];
        }

        return $this->transformedFormula;
    }
}
