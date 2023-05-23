<?php

namespace App\Http\Livewire\SPAIN20;

use Livewire\Component;
use App\Models\SPATB20;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n20.edit')->layout('welcome');
    }
    public $num, $LibEmballage, $oneemballage ;

    public function mount($id){
        $this->idembal= $id;
        $this->onecalib = SPATB14::where('id', $idembal)->first();
       // echo $this->oneemballage;
        $this->num= $this->onecalib->idembal;
        $this->LibEmballage = $this->oneemballage->LibEmballage;
    }
    public function update()
    {
        $this->oneemballage->where('id', $this->idembal)->update([
          //  'id' => $this->num
            'LibEmballage' => $this->LibEmballage
        ]);

        

        return redirect()->to('/SPAIN20');
    }
}
