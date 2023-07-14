<?php

namespace App\Http\Livewire\SPATB36;

use Livewire\Component;
use App\Models\SPATB36;
use App\Models\SPATB35;
use App\Models\SPATB34;

class Create extends Component
{

    public $exportation ,$idNavire, $idVille,
    $NumLettreVoiture, $NbrePalette, $DteExportation, $exportationList;

    public function mount()
    {
        $this->exportationList = SPATB36::all();
        $this->navireList = SPATB35::all();
        $this->villeList = SPATB34::all();

    }

    public function render()
    {
        return view('livewire.s-p-a-t-b36.create')->layout('layouts.app');
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
