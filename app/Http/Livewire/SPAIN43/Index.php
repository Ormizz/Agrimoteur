<?php

namespace App\Http\Livewire\SPAIN43;

use Livewire\Component;
use App\Models\SPATB43;

class Index extends Component
{
    public $typeuserlist, $typeuserFinding;

    public function mount()
    {
        $this->typeuserlist();
    }
    public function typeuserlist()
    {
        $this->typeuserlist = SPATB43::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-i-n43.index')->layout('layouts.app');
    }
    public function destroy($idTypeUtilisateur)
    {
        $this->typeuserFinding = SPATB43::findorfail($idTypeUtilisateur);
        $this->typeuserFinding->delete();
        $this->typeuserlist();
    }
}
