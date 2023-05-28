<?php

namespace App\Http\Livewire\SPATB40;

use Livewire\Component;
use App\Models\SPATB40;
use App\Models\SPATB41;

class Create extends Component
{
    public $idPers, $nom, $prenom, $dateNaissance,
    $status, $idSexe, $sexeList;

    public function mount()
    {
        $this->sexeList = SPATB41::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b40.create');
    }

    public function addPersonnal()
    {
        $personnal = new SPATB40();
        $personnal->idPers = $this->idPers;
        $personnal->nom = $this->nom;
        $personnal->prenom = $this->prenom;
        $personnal->dteNaissance = $this->dateNaissance;
        $personnal->Status = $this->status;
        $personnal->idSexe = $this->idSexe;
        $personnal->save();
        return redirect()->to('/SPAIN40');
    }
}
