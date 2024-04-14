<?php

namespace ghsevada;

use ghsevada\Plan;

class CommercialPlan extends Plan
{

    public function getRate(): float
    {
        return 7.50;
    }
}