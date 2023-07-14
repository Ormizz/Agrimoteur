<?php

namespace App\Http\Livewire\SPAIN21;

use Livewire\Component;
use App\Models\SPATB21;

class Create extends Component
{

    public $QteProduction,$DateProduction;

    public function render()
    {
        return view('livewire.s-p-a-i-n21.create')->layout('welcome');
    }
    public function addcont(){
        $conten = new SPATB21();
        $hormonage-> QteProduction = $this->$QteProduction;
        $hormonage->id = $this->num;
        $DateProduction->DateProduction = $this->DateProduction;
        $conten->save();
        return redirect()->to('/SPAIN21');
    }
}
