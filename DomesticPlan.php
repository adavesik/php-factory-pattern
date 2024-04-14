<?php

namespace ghsevada;

use ghsevada\Plan;

class DomesticPlan extends Plan
{

    public function getRate(): float
    {
        return 4.50;
    }
}