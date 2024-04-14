<?php

namespace ghsevada;

class GetPlanFactory
{
    public function getPlan(string $planType): ?Plan
    {
        $planType = strtoupper($planType);

        if ($planType === 'DOMESTIC-PLAN') {
            return new DomesticPlan();
        } elseif ($planType === 'COMMERCIAL-PLAN') {
            return new CommercialPlan();
        } elseif ($planType === 'INSTITUTIONAL-PLAN') {
            return new InstitutionalPlan();
        }

        return null;
    }
}