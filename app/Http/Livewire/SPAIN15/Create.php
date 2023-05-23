<?php

namespace App\Http\Livewire\SPAIN15;

use Livewire\Component;
use App\Models\SPATB15;

class Create extends Component
{
    public $loc, $num, $localiser;

    public function render()
    {
        return view('livewire.s-p-a-i-n15.create')->layout('welcome');
    }
    public function addlocalisation(){
        $loc = new SPATB15();
        $loc->Localisation = $this->localiser;
        $loc->save();
        return redirect()->to('/SPAIN15');
    }
}
