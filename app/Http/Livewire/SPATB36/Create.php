<?php

namespace App\Http\Livewire\SPATB36;

use Livewire\Component;
use App\Models\SPATB36;

class Create extends Component
{

    public $exportation ,$idNavire, $idVille,
    $NumLettreVoiture, $NbrePalette, $DteExportation;

    public function render()
    {
        return view('livewire.s-p-a-t-b36.create');
    }

    public function addTypeUser()
    {
        $exportation = new SPATB36();
        $exportation->idNavire = $this->idNavire;
        $exportation->idVille = $this->idVille;
        $exportation->NumLettreVoiture = $this->NumLettreVoiture;
        $exportation->idNbrePaletteVille = $this->NbrePalette;
        $exportation->DteExportation = $this->DteExportation;
        $exportation->save();
        return redirect()->to('/SPAIN36');
    }
}
