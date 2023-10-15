<?php

namespace App\Services;

use App\Models\Currency;

class CurrencyService
{
    public function store($name,$rate)
    {
        Currency::create([
            'name' => $name,
            'rate' => $rate,
        ]);
    }
}
