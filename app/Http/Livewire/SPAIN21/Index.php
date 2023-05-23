<?php

namespace App\Http\Livewire\SPAIN21;

use Livewire\Component;
use App\Models\SPATB14;

class Index extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n21.index')->layout('welcome');
    }

    public $cont,$libcont ;

    public function mount(){
        $this->hormonelist();
    }

    public function contlist()
    {
        $this->cont = SPATB21::all();
    }
    public function destroy($id)
    {
        $this->libcont = SPATB21::findorfail($id);
        $this->libcont->delete();
        $this->contlist();
    }
}
