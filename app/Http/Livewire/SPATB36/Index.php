<?php

namespace App\Http\Livewire\SPATB36;

use Livewire\Component;
use App\Models\SPATB36;

class Index extends Component
{

    public $exportationList, $exportationFinding;

    public function mount(){
        $this->exportationList();
    }

    public function exportationList()
    {
        $this->exportationList = SPATB36::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b36.index')->layout('layouts.app');
    }

    public function destroy($Exportation)
    {
        $this->exportationFinding = SPATB36::findorfail($Exportation['id']);
        $this->exportationFinding->delete();
        $this->exportationList();
    }
}
