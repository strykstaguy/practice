<?php

namespace App;

interface Customer extends Payer
{
    public function getMonthlyFee(): float;

    public function getAmountToBorrow(): int;

    public function getType(): string; }