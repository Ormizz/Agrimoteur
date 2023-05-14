<?php

namespace App\Http\Livewire\SPATB41;

use Livewire\Component;
use App\Models\SPATB41;


class Edit extends Component
{

    public $sexes, $num, $NatureSexe, $onesexe, $idSexe;

    public function mount($idSexe){
        $this->idSexe= $idSexe;
        $this->onesexe = SPATB41::where('idSexe', $idSexe)->first();
        echo $this->onesexe;
        $this->num= $this->onesexe->idSexe;
        $this->NatureSexe = $this->onesexe->NatureSexe;
    }

    public function render()
    {
        return view('livewire.s-p-a-t-b41.edit')->layout('welcome');
    }

    public function update()
    {
        $this->onesexe->where('idSexe', $this->idSexe)->update([
            'idSexe' => $this->num,
            'NatureSexe' => $this->NatureSexe
        ]);

        // $model = SPATB41::findOrFail($idSexe);
        // $model->update([
        //     'idSexe' => $this->idSexe,
        //     'NatureSexe' => $this->NatureSexe,
        // ]);

        return redirect()->to('/SPATB41');
    }
}
