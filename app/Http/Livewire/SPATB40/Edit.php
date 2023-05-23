<?php

namespace App\Http\Livewire\SPATB40;

use Livewire\Component;
use App\Models\SPATB43;


class Edit extends Component
{

    public $idPers, $nom, $prenom, $dateNaissance,
    $status, $idSexe, $personnal, $idpersonnal;

    public function mount($personnelid){
        $this->idpersonnal = $personnelid;
        $this->personnal = SPATB40::where('idPers', $idpersonnal)->first();
        echo $this->personnal;
        $this->idPers = $personnal->idPers;
        $this->nom = $personnal->nom;
        $this->prenom = $personnal->prenom;
        $this->dateNaissance = $personnal->dateNaissance;
        $this->status = $personnal->status;
        $this->idSexe = $personnal->idSexe;
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b40.edit');
    }

    public function update()
    {
        $this->oneTypeUser->where('idPers', $this->idpersonnal)->update([
            'idPers' => $this->idPers,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'dateNaissance' => $this->dateNaissance,
            'status' => $this->status,
            'idSexe' => $this->idSexe,
        ]);

        return redirect()->to('/SPAIN40');
    }
}
