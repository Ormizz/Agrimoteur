<?php

namespace App\Http\Livewire\SPAIN20;

use Livewire\Component;
use App\Models\SPATB20;

class Create extends Component
{
    public $embal,$key,$LibEmb;

    public function render()
    {
        return view('livewire.s-p-a-i-n20.create')->layout('welcome');
    }
    public function addemballage(){
        $embal = new SPATB20();
        $embal->LibEmballage = $this->LibEmb;
        $embal->save();
        return redirect()->to('/SPAIN20');
    }
}
