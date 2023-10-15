<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurrencyRequest;
use App\Models\Currency;
use App\Services\CurrencyService;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function store(StoreCurrencyRequest $request, CurrencyService $service)
    {
        $service->storePost($request->name, $request->rate);
    }
}
