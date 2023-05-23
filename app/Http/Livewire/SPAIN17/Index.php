<?php

namespace App\Http\Livewire\SPAIN17;

use Livewire\Component;
use App\Models\SPATB17;

class Index extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n17.index')->layout('welcome');
    }
    public $hormones,$libhormone ;

    public function mount(){
        $this->hormonelist();
    }

    public function hormonelist()
    {
        $this->hormones = SPATB17::all();
    }
    public function destroy($id)
    {
        $this->libhormone = SPATB17::findorfail($id);
        $this->libhormone->delete();
        $this->hormonelist();
    }
}
