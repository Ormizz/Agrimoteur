<?php

namespace App\Http\Livewire\SPAIN15;

use Livewire\Component;
use App\Models\SPATB15;

class Index extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n15.index')->layout('welcome');
    }

    public $Locapa,$localiser ;

    public function mount(){
        $this->parcellelist();
    }

    public function parcellelist()
    {
        $this->Locapa = SPATB15::all();
    }

    public function destroy($id)
    {
        $this->localiser = SPATB15::findorfail($id);
        $this->localiser->delete();
        $this->parcellelist();
    }
}
