<?php

namespace App\Http\Livewire\SPAIN21;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.s-p-a-i-n21.edit');
    }

    public $num, $LibCalibre, $oneprodu,$qteprod ;

    public function mount($id){
        $this->idhormone= $id;
        $this->oneprodu = SPATB21::where('id', $idcont)->first();
      //  echo $this->onehormone;
        $this->num= $this->oneprodu->idcont;
        $this->QteProduction = $this->oneprodu->QteProduction;
        $this->$dteprod= $this->oneprod->idcont;
        $this->DateProduction = $this->oneprod->DateProduction;
    }
    public function update()
    {
        $this->onecalib->where('id', $this->idcont)->update([
          //  'id' => $this->num
            'QteProduction' => $this->QteProduction,
            'DateProduction' => $this->DateProduction
        ]);

        

        return redirect()->to('/SPAIN21');
    }
}
