<?php

namespace App\Http\Livewire\SPAIN35;

use Livewire\Component;
use App\Models\SPATB35;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n35.edit')->layout('welcome');
    }

    public $num, $LibNavire, $onenav ;

    public function mount($id){
        $this->idnav= $id;
        $this->onenav = SPATB35::where('id', $idnav)->first();
      //  echo $this->onenav;
        $this->num= $this->onenav->idnav;
        $this->LibNavire = $this->onenav->LibNavire;
    }
    public function update()
    {
        $this->onenav->where('id', $this->idnav)->update([
          //  'id' => $this->num
            'LibNavire' => $this->LibNavire
        ]);

        

        return redirect()->to('/SPAIN35');
    }
}
