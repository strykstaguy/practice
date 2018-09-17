<?php

namespace App;

interface Payer
{
    public function pay(float $amount);

    public function isExemptOfTaxes(): bool;
}