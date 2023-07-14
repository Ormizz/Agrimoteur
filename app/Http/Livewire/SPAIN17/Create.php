<?php

namespace App\Http\Livewire\SPAIN17;

use Livewire\Component;
use App\Models\SPATB17;

class Create extends Component
{
    public $DateHormonage,$nbrePlantHormoner;

    public function render()
    {
        return view('livewire.s-p-a-i-n17.create')->layout('welcome');
    }

    public function addhormone(){
        $hormonage = new SPATB17();
        $hormonage-> DateHormonage = $this->$DateHormonage;
        $hormonage->id = $this->num;
        $nbrePlantHormoner->nbrePlantHormoner = $this->nbrePlantHormoner;
        $hormonage->save();
        return redirect()->to('/SPAIN17');
    }
   
   
}
