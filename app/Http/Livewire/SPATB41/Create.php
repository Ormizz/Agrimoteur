<?php

namespace App\Http\Livewire\SPATB41;

use Livewire\Component;
use App\Models\SPATB41;

class Create extends Component
{

    public $sexes, $num, $NatureSexe;

    public function render()
    {
        return view('livewire.s-p-a-t-b41.create')->layout('welcome');
    }

    public function addSexe(){
        $sexe = new SPATB41();
        $sexe->idSexe = $this->num;
        $sexe->NatureSexe = $this->NatureSexe;
        $sexe->save();
        $this->num = $this->NatureSexe = "";
        return redirect()->to('/SPATB41');
    }
}
