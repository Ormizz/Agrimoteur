<?php

namespace App\Http\Livewire\SPAIN43;

use Livewire\Component;
use App\Models\SPATB43;

class Create extends Component
{
    public $typeuser, $typeid, $typelib;

    public function render()
    {
        return view('livewire.s-p-a-i-n43.create')->layout('layouts.app');
    }

    public function addtypeuser(){
        $typeuser = new SPATB43();
        $typeuser->idTypeUtilisateur = $this->typeid;
        $typeuser->LibTypeUtilisateur = $this->typelib;
        $typeuser->save();
        return redirect()->to('/SPAIN43');
    }
}
