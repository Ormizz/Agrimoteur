<?php

namespace App\Http\Livewire\SPAIN43;

use Livewire\Component;
use App\Models\SPATB43;

class Index extends Component
{
    public $typeuserlist, $typeuserFinding;
    public $typeuser, $typeid, $typelib;

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
    public function destroy($typeuser)
    {
        $this->typeuserFinding = SPATB43::findorfail($typeuser['idTypeUtilisateur']);
        $this->typeuserFinding->delete();
        $this->typeuserlist();
    }

    public function addtypeuser(){
        $typeuser = new SPATB43();
        $typeuser->idTypeUtilisateur = $this->typeid;
        $typeuser->LibTypeUtilisateur = $this->typelib;
        $typeuser->save();
        return redirect()->to('/SPAIN43');
    }
}
