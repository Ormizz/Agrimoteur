<?php

namespace App\Http\Livewire\SPAIN14;

use Livewire\Component;
use App\Models\SPATB14;

class Index extends Component

{
    public $Calibres,$libcal ;

    public function mount(){
        $this->caliblist();
    }

    public function caliblist()
    {
        $this->Calibres = SPATB14::all();
    }

    public function render()
    {
        return view('livewire.s-p-a-i-n14.index')->layout('welcome');
    }

    public function destroy($id)
    {
        $this->libcal = SPATB14::findorfail($id);
        $this->libcal->delete();
        $this->caliblist();
    }
}
