<?php

namespace App\Livewire;

use App\Models\Currency;
use GuzzleHttp\Client;
use Livewire\Component;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class Currencies extends Component
{
    protected $listeners = ['delete'];
    protected $queryString = ['search'];

    public $search = '';
    public $loading = true;

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

    public function deleteConfirm($id)
    {
        $this->dispatch('swal:confirm',
            type: 'warning',
            title: 'Are you sure?',
            text: '',
            id: $id
        );
    }

    public function delete($id)
    {
        Currency::find($id)->delete();

        $this->dispatch('swal:modal',
            type: 'success',
            title: 'Record successfully deleted.',
            text: '');
    }
}
