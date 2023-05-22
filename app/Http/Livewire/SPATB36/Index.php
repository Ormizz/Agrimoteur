<?php

namespace App\Http\Livewire\SPATB36;

use Livewire\Component;
use App\Models\SPATB36;

class Index extends Component
{

    public $exportationList, $exportationFinding;

    public function mount(){
        exportationList();
    }

    public function exportationList()
    {
        $this->exportationList = SPATB36::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b36.index');
    }

    public function destroy($idExportation)
    {
        $this->exportationFinding = SPATB36::findorfail($idExportation);
        $this->exportationFinding->delete();
        exportationList();
    }
}
