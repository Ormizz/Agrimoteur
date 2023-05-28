<?php

namespace App\Http\Livewire\SPATB44;

use Livewire\Component;
use App\Models\SPATB44;

class Create extends Component
{
    public $idFunction, $LibFonctions, $function;

    public function mount()
    {
        // $this->sexeList = SPATB41::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b44.create');
    }

    public function addFunction()
    {
        $function = new SPATB44();
        $function->idFunction = $this->idFunction;
        $function->LibFonctions = $this->LibFonctions;
        $function->save();
        return redirect()->to('/SPAIN44');
    }
}
