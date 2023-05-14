<?php

namespace App\Http\Livewire\SPATB41;

use Livewire\Component;
use App\Models\SPATB41;

class Index extends Component
{

    public $sexes, $num, $NatureSexe, $onesexe;

    public function mount(){
        $this->sexelist();
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b41.index')->layout('welcome');
    }

    public function sexelist()
    {
        $this->sexes = SPATB41::all();
    }

    public function destroy($idSexe)
    {
        $this->onesexe = SPATB41::findorfail($idSexe);
        dd($this->onesexe);
        $this->onesexe->delete();
        $this->sexelist();
    }

}
