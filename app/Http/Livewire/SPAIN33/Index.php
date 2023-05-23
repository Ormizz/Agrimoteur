<?php

namespace App\Http\Livewire\SPAIN33;

use Livewire\Component;
use App\Models\SPATB33;

class Index extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n33.index')->layout('welcome');
    }

    public $pays,$libpays ;

    public function mount(){
        $this->payslist();
    }

    public function payslist()
    {
        $this->pays = SPATB33::all();
    }
}
