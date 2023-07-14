<?php

namespace App\Http\Livewire\SPATB44;

use Livewire\Component;
use App\Models\SPATB44;

class Edit extends Component
{
    public $idFunction, $LibFonctions, $functionfinding, $idfunc;

    public function mount($fonctionid){
        $this->idfunc = $fonctionid;
        $this->functionfinding = SPATB44::where('idFunction', $this->idfunc)->first();
        echo $this->functionfinding;
        $this->idFunction= $this->functionfinding->idFunction;
        $this->LibFonctions = $this->functionfinding->LibFonctions;
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b44.edit');
    }

    public function update()
    {
        $this->functionfinding->where('idFunction', $this->idfunc)->update([
            'idFunction' => $this->idFunction,
            'LibFonctions' => $this->LibFonctions
        ]);

        return redirect()->to('/SPAIN44');
    }
}
