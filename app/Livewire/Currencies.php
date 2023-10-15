<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class Currencies extends Component
{
    public $currencies;

    public function mount()
    {
        $this->currencies = [];
    }

    public function render()
    {
        return view('livewire.currencies');
    }

    public function reloadCurrencies()
    {
        $client = new Client();
        $url = 'http://api.exchangeratesapi.io/v1/latest?access_key=' . config('services.exchange_rates.access_key') . '&format=1';
        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);
        $this->currencies = $data['rates'] ?? [];
    }
}
