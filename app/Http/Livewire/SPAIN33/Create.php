<?php

namespace App\Http\Livewire\SPAIN33;

use Livewire\Component;
use App\Models\SPATB33;

class Create extends Component
{
    
    public $pays,$Libpays;

    public function render()
    {
        return view('livewire.s-p-a-i-n33.create')->layout('welcome');
    }

    public function addcalibre(){
        $pays = new SPATB33();
        $pays->LibPays = $this->Libpays;
        $pays->save();
        return redirect()->to('/SPAIN33');
    }
    
}
