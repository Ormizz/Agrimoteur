<?php

namespace App\Http\Livewire\SPAIN41;

use Livewire\Component;
use App\Models\SPATB41;

class Index extends Component
{

    public $sexes, $num, $NatureSexe, $onesexe;

    public function mount(){
        $this->sexelist();
        $this->sexes = SPATB41::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-i-n41.index')->layout('layouts.app');
    }

    public function sexelist()
    {
        $this->sexes = SPATB41::all();
    }

    public function destroy($Sexe)
    {
        // dd($Sexe['idSexe']);
        $this->onesexe = SPATB41::findorfail($Sexe['idSexe']);
        $this->onesexe->delete();
        // dd($this->onesexe->delete());
        $this->sexelist();
    }

}
