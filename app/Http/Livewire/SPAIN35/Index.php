<?php

namespace App\Http\Livewire\SPAIN35;

use Livewire\Component;
use App\Models\SPATB35;

class Index extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n35.index')->layout('welcome');
    }

    public $navires,$libnav ;

    public function mount(){
        $this->navlist();
    }

    public function navlist()
    {
        $this->navires = SPATB35::all();
    }
    public function destroy($id)
    {
        $this->libnav = SPATB35::findorfail($id);
        $this->libnav->delete();
        $this->navlist();
    }
}
