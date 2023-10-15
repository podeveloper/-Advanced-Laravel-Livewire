<?php

namespace App\Livewire;

use App\Models\Currency;
use App\Services\CurrencyService;
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

        (new CurrencyService())->store($this->name, $this->rate);

        $this->reset();
    }
}
