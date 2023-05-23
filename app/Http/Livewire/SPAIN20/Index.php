<?php

namespace App\Http\Livewire\SPAIN20;

use Livewire\Component;
use App\Models\SPATB20;

class Index extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n20.index')->layout('welcome');
    }
    public $emballage,$libembal ;

    public function mount(){
        $this->emballist();
    }

    public function emballist()
    {
        $this->emballage = SPATB20::all();
    }
    public function destroy($id)
    {
        $this->libembal = SPATB20::findorfail($id);
        $this->libembal->delete();
        $this->emballist();
    }
}
