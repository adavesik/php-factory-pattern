<?php

namespace ghsevada;

use ghsevada\Plan;

class InstitutionalPlan extends Plan
{

    public function getRate(): float
    {
        return 4.50;
    }
}