<?php

namespace App\Http\Livewire\SPAIN34;

use Livewire\Component;
use App\Models\SPATB34;

class Index extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n34.index')->layout('welcome');
    }

    public $villes,$libvil ;

    public function mount(){
        $this->villelist();
    }

    public function villelist()
    {
        $this->villes = SPATB34::all();
    }
    public function destroy($id)
    {
        $this->libvil = SPATB34::findorfail($id);
        $this->libvil->delete();
        $this->villelist();
    }

}
