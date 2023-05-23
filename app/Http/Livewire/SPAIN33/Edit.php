<?php

namespace App\Http\Livewire\SPAIN33;

use Livewire\Component;
use App\Models\SPATB33;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n33.edit')->layout('welcome');
    }

    public function mount($id){
        $this->idpays= $id;
        $this->onepays = SPATB33::where('id', $idpays)->first();
       // echo $this->onecalib;
        $this->num= $this->onepays->idpays;
        $this->LibPays = $this->onepays->LibPays;
    }

    public function update()
    {
        $this->onepays->where('id', $this->idpays)->update([
          //  'id' => $this->num
            'LibPays' => $this->LibPays
        ]);

        

        return redirect()->to('/SPAIN33');
    }
}
