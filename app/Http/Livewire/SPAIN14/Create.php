<?php

namespace App\Http\Livewire\SPAIN14;

use Livewire\Component;
use App\Models\SPATB14;

class Create extends Component
{
    public $cal,$key,$LibCal;

    public function render()
    {
        return view('livewire.s-p-a-i-n14.create')->layout('welcome');
    }
    public function addcalibre(){
        $cal = new SPATB14();
        $cal->LibCalibre = $this->LibCal;
        $cal->save();
        return redirect()->to('/SPAIN14');
    }
}
