<?php

namespace App\Http\Livewire\SPAIN41;

use Livewire\Component;
use App\Models\SPATB41;

class Create extends Component
{

    public $sexes, $num, $NatureSexe;

    public function render()
    {
        return view('livewire.s-p-a-i-n41.create')->layout('welcome');
    }

    public function addSexe(){
        $sexe = new SPATB41();
        $sexe->idSexe = $this->num;
        $sexe->NatureSexe = $this->NatureSexe;
        $sexe->save();
        return redirect()->to('/SPAIN41');
    }
}
