<?php

namespace App\Http\Livewire\SPAIN34;

use Livewire\Component;
use App\Models\SPATB34;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n34.edit')->layout('welcome');
    }

    public $num, $libelle, $oneville ;

    public function mount($id){
        $this->idvil= $id;
        $this->oneville = SPATB34::where('id', $idvil)->first();
        echo $this->oneville;
        $this->num= $this->oneville->idvil;
        $this->libelle = $this->oneville->libelle;
    } 
    
    public function update()
    {
        $this->oneville->where('id', $this->idvil)->update([
          //  'id' => $this->num
            'libelle' => $this->libelle
        ]);

        

        return redirect()->to('/SPAIN34');
    }
}
