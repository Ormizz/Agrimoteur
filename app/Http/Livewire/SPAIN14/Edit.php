<?php

namespace App\Http\Livewire\SPAIN14;

use Livewire\Component;
use App\Models\SPATB14;

class Edit extends Component
{
    public $num, $LibCalibre, $onecalib ;

    public function mount($id){
        $this->idcal= $id;
        $this->onecalib = SPATB14::where('id', $idcal)->first();
        echo $this->onecalib;
        $this->num= $this->onecalib->idcal;
        $this->LibCalibre = $this->onecalib->LibCalibre;
    }

    public function render()
    {
        return view('livewire.s-p-a-i-n14.edit')->layout('welcome');
    }

    public function update()
    {
        $this->onecalib->where('id', $this->idCal)->update([
          //  'id' => $this->num
            'LibCalibre' => $this->LibCalibre
        ]);

        

        return redirect()->to('/SPAIN14');
    }
}
