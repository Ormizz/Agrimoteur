<?php

namespace App\Http\Livewire\SPATB44;

use Livewire\Component;
use App\Models\SPATB44;

class Edit extends Component
{
    public $functionid, $libfunc, $functionfinding, $idfunc;

    public function mount($idfunc){
        $this->functionfinding = SPATB43::where('idFunction', $idfunc)->first();
        echo $this->functionfinding;
        $this->functionid= $this->functionfinding->idFunction;
        $this->libfunc = $this->functionfinding->LibFonctions;
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b44.edit');
    }

    public function update()
    {
        $this->functionfinding->where('idFunction', $this->idfunc)->update([
            'idFunction' => $this->functionid,
            'LibFonctions' => $this->libfunc
        ]);

        return redirect()->to('/SPAIN44');
    }
}
