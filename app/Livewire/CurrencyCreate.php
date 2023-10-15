<?php

namespace App\Livewire;

use App\Models\Currency;
use Livewire\Component;

class CurrencyCreate extends Component
{
    public $name;
    public $rate;
    protected $rules = [
      'name' => 'required',
      'rate' => 'required',
    ];
    public function mount()
    {
        $this->name = '';
        $this->rate = '';
    }
    public function render()
    {
        return view('livewire.currency-create');
    }

    public function submit()
    {
        $this->validate();

        Currency::create([
           'name' => $this->name,
           'rate' => $this->rate,
        ]);

        $this->name = '';
        $this->rate = '';
    }
}
