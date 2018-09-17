<?php

namespace App\Customer;

use App\Customer;
use App\Person;

class Basic extends Person implements Customer
{
    public function getMonthlyFee(): float
    {
        return 5.0;
    }

    public function getAmountToBorrow(): int
    {
        return 3;
    }

    public function getType(): string
    {
        return 'Basic';
    }

    public function pay(float $amount)
    {
        echo "Paying $amount.";
    }

    public function isExemptOfTaxes(): bool
    {
        return false;
    }
}