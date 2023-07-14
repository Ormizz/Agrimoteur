<?php

namespace App\Http\Livewire\SPATB46;

use Livewire\Component;

class Index extends Component
{
    public $functionList, $functionFinding;

    public function mount()
    {
        $this->functionList();
    }

    public function functionList()
    {
        $this->functionList = SPATB44::all();
    }
    
    public function render()
    {
        return view('livewire.s-p-a-t-b46.index');
    }

    public function destroy($Function)
    {
        $this->functionFinding = SPATB44::findorfail($Function['idFunction']);
        $this->functionFinding->delete();
        $this->functionList();
    }
}
