<?php

namespace App\Http\Livewire\SPATB44;

use Livewire\Component;
use App\Models\SPATB44;

class Index extends Component
{
    public $functionList, $functionFinding;

    public function mount()
    {
        functionList();
    }

    public function functionList()
    {
        $this->functionList = SPATB44::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b44.index');
    }

    public function destroy($idFunction)
    {
        $this->functionFinding = SPATB44::findorfail($idFunction);
        $this->functionFinding->delete();
        $this->functionList();
    }
}
