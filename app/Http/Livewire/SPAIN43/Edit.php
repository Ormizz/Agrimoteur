<?php

namespace App\Http\Livewire\SPAIN43;

use Livewire\Component;
use App\Models\SPATB43;

class Edit extends Component
{

    public $typeuserid, $libTypeUser, $oneTypeUser, $idType;

    public function mount($typeuserid){
        $this->oneTypeUser = SPATB43::where('idTypeUtilisateur', $typeuserid)->first();
        echo $this->oneTypeUser;
        $this->idType= $this->oneTypeUser->idTypeUtilisateur;
        $this->libTypeUser = $this->oneTypeUser->LibTypeUtilisateur;
    }

    public function render()
    {
        return view('livewire.s-p-a-i-n43.edit')->layout('welcome');
    }

    public function update()
    {
        $this->oneTypeUser->where('idTypeUtilisateur', $this->idType)->update([
            'idTypeUtilisateur' => $this->typeuserid,
            'LibTypeUtilisateur' => $this->libTypeUser
        ]);

        return redirect()->to('/SPAIN43');
    }
}
