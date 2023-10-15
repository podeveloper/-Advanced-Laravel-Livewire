<?php

namespace App\Livewire;

use App\Models\Currency;
use GuzzleHttp\Client;
use Livewire\Component;

class Currencies extends Component
{
    public $currencies;

    public function mount()
    {
        $this->currencies = Currency::get(['id','name','rate']);
    }

    public function render()
    {
        return view('livewire.currencies');
    }
}
