<?php

namespace App\Livewire;

use App\Models\Currency;
use GuzzleHttp\Client;
use Livewire\Component;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class Currencies extends Component
{
    public $search = '';

    public function render()
    {
        $currencies = Currency::query()
            ->when($this->search != '', function ($query) {
                $query->where('name','like','%'.$this->search.'%')
                    ->orWhere('rate','like','%'.$this->search.'%');
            })
            ->get();

        return view('livewire.currencies', compact('currencies'));
    }
}
