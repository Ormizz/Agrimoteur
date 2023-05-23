<?php

namespace App\Http\Livewire\SPAIN15;

use Livewire\Component;
use App\Models\SPATB15;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n15.edit')->layout('welcome');
    }
    public $num, $Localisation, $oneparcelle;

    public function mount($id){
        $this->idparcelle= $id;
        $this->oneparcelle = SPATB15::where('id', $idparcelle)->first();
        $this->num= $this->oneparcelle->idparcelle;
        $this->Localisation = $this->oneparcelle->Localisation;
    }
    
    public function update()
    {
        $this->oneparcelle->where('id', $this->idparcelle)->update([
    
            'NatureSexe' => $this->NatureSexe
        ]);

        return redirect()->to('/SPAIN15');
    }
}
