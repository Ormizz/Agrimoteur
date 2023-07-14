<?php

namespace App\Http\Livewire\SPATB40;

use Livewire\Component;
use App\Models\SPATB40;
use App\Models\SPATB41;


class Edit extends Component
{

    public $idPers, $nom, $prenom, $dateNaissance,
    $status, $idSexe, $personnal, $idpersonnal;

    public function mount($personnelid){
        // dd($personnelid);
        $this->idpersonnal = $personnelid;
        $this->personnal = SPATB40::where('idPers', $this->idpersonnal)->first();
        echo $this->personnal;
        $this->idPers = $this->personnal->idPers;
        $this->nom = $this->personnal->Nom;
        // dd($this->nom);
        $this->prenom = $this->personnal->Prenom;
        $this->dateNaissance = $this->personnal->DteNaissance;
        $this->status = $this->personnal->Status;
        $this->idSexe = $this->personnal->idSexe;
        $this->sexeList = SPATB41::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b40.edit');
    }

    public function update()
    {
        // dd($this->idSexe);
        $this->personnal->where('idPers', $this->idpersonnal)->update([
            'idPers' => $this->idPers,
            'Nom' => $this->nom,
            'Prenom' => $this->prenom,
            'DteNaissance' => $this->dateNaissance,
            'Status' => $this->status,
            'idSexe' => $this->idSexe,
        ]);

        return redirect()->to('/SPAIN40');
    }
}
