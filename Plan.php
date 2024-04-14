<?php

namespace ghsevada;

abstract class Plan
{
    protected float $rate;

    abstract public function getRate(): float;

    public function calculateBill(int $units): void
    {
        echo "Bill amount: " . ($units * $this->rate) . PHP_EOL;
    }
}