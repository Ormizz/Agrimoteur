<?php

namespace App\Http\Livewire\SPAIN17;

use Livewire\Component;
use App\Models\SPATB17;
class Edit extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n17.edit')->layout('welcome');
    }
    public $num, $LibCalibre, $onehormone,$nbplant ;

    public function mount($id){
        $this->idhormone= $id;
        $this->onehormone = SPATB17::where('id', $idhormone)->first();
      //  echo $this->onehormone;
        $this->num= $this->onehormone->idhormone;
        $this->DteHormonage = $this->onehormone->DteHormonage;
        $this->$nbplant= $this->onehormon->idhormone;
        $this->NbrePlantHormoner = $this->onehormon->NbrePlantHormoner;
    }

    
    public function update()
    {
        $this->onecalib->where('id', $this->idhormone)->update([
          //  'id' => $this->num
            'DteHormonage' => $this->DteHormonage,
            'NbrePlantHormoner' => $this->NbrePlantHormoner
        ]);

        

        return redirect()->to('/SPAIN17');
    }
}
