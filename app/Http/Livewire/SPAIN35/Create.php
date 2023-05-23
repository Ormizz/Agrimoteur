<?php

namespace App\Http\Livewire\SPAIN35;

use Livewire\Component;
use App\Models\SPATB35;

class Create extends Component
{
    public $nav,$key,$Libnav;

    public function render()
    {
        return view('livewire.s-p-a-i-n35.create')->layout('welcome');
    }
    public function addcalibre(){
        $nav = new SPATB35();
        $nav->LibNavire = $this->Libnav;
        $nav->save();
        return redirect()->to('/SPAIN35');
    }
}
