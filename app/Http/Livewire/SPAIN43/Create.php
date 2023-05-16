<?php

namespace App\Http\Livewire\SPAIN43;

use Livewire\Component;
use App\Models\SPATB43;

class Create extends Component
{
    public $typeuserid, $libTypeUser;

    public function render()
    {
        return view('livewire.s-p-a-i-n43.create')->layout('welcome');
    }

    public function addTypeUser()
    {
        $typeuser = new SPATB43();
        $typeuser->idTypeUtilisateur = $this->typeuserid;
        $typeuser->LibTypeUtilisateur = $this->libTypeUser;
        $typeuser->save();
        return redirect()->to('/SPAIN43');
    }
}
