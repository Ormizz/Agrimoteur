<?php

namespace App\Http\Livewire\SPAIN34;

use Livewire\Component;
use App\Models\SPATB34;

class Create extends Component
{
    public $vil,$key,$Lib;

    public function render()
    {
        return view('livewire.s-p-a-i-n34.create')->layout('welcome');
    }

    public function addville(){
        $vil = new SPATB34();
        $vil->libelle = $this->Lib;
        $vil->save();
        return redirect()->to('/SPAIN34');
    }
}
