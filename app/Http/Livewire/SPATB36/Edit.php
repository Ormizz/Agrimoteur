<?php

namespace App\Http\Livewire\SPATB36;

use Livewire\Component;

class Edit extends Component
{

    public $exportation ,$idNavire, $idVille,
    $NumLettreVoiture, $NbrePalette, $DteExportation, $exportid;

    public function mount($exportationid){
        $this->exportid = $exportationid;
        $this->exportation = SPATB36::where('id', $this->$exportid)->first();
        echo $this->exportation;
        $this->idNavire= $this->exportation->idNavire;
        $this->idVille = $this->exportation->idVille;
        $this->NumLettreVoiture= $this->exportation->NumLettreVoiture;
        $this->NbrePalette = $this->exportation->NbrePalette;
        $this->DteExportation = $this->exportation->DteExportation;
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b36.edit');
    }

    public function update()
    {
        $this->exportation->where('id', $this->exportid)->update([
            'idNavire' => $exportation->idNavire,
            'idVille' => $exportation->idVille,
            'NumLettreVoiture' => $exportation->NumLettreVoiture,
            'idNbrePaletteVille' => $exportation->NbrePalette,
            'DteExportation' => $exportation->DteExportation,
        ]);

        return redirect()->to('/SPAIN36');
    }

}
