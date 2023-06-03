<?php

namespace App\Http\Livewire\SPATB40;

use Livewire\Component;
use App\Models\SPATB40;

class Index extends Component
{
    public $personnalList, $personnalFinding;

    public function mount()
    {
        $this->personnalList();
    }
    public function personnalList()
    {
        $this->personnalList = SPATB40::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b40.index');
    }

    public function destroy($personnal)
    {
        $this->personnalFinding = SPATB40::findorfail($personnal['idPers']);
        $this->personnalFinding->delete();
        $this->personnalList();
    }
}
