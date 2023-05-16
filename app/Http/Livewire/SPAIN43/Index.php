<?php

namespace App\Http\Livewire\SPAIN43;

use Livewire\Component;
use App\Models\SPATB43;

class Index extends Component
{
    public $typeuserlist;

    public function mount()
    {
        $this->typeuserlist = SPATB43::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-i-n43.index')->layout('welcome');
    }
}
