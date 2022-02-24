<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Cim;
use App\Models\Kapcsolat;
use App\Models\Szemely;
use App\Models\Ugyfel;

class CimCrud extends Component
{
    public $cim, $fc_kapcsolat_id, $cim_cime, $cim_aktiv, $cim_letrehozas, $cim_mod, $cim_id;
    public $kapcsolat, $fk_ugyfel_id, $fk_szemely_id, $kapcs_letrehozas, $kapcs_mod, $kapcsolat_id;
    private bool $ujRecord = false;

    public $akt_cim;
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.Kapcsolat.Cim_crud', [
            'cimek0' => Cim::paginate(6),
            'kapcsolatok0' => Kapcsolat::all(),
            'szemelyek0' => Szemely::all(),
            'ugyfelek0' => Ugyfel::all(),
        ]);
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->ujRecord = true;
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm()
    {
        $this->resetErrorBag(); //korábbi hibaüzenetek ürítése
        $this->fc_kapcsolat_id = null; 
        $this->cim_cime = ''; 
        $this->cim_aktiv = true;
        $this->cim_letrehozas = Carbon::now();
        $this->cim_mod = Carbon::now();
    }

    public function edit($id)
    {
        $this->resetErrorBag();
        $this->ujRecord = false;
        
        $cim = Cim::findOrFail($id);
        $this->cim_id = $id;
        $this->fc_kapcsolat_id = $cim->kapcsolat_id;
        $this->cim_cime = $cim->cim_cime;
        $this->cim_aktiv = $cim->cim_aktiv == 0 ? false : true;
        $this->cim_letrehozas = $cim->esemeny_letrehozas;
        $this->cim_mod = $cim->esemeny_mod;
    
        $this->openModalPopover();
    }
    
    public function delete($id)
    {
        $this->akt_cim = Cim::find($id);
        Cim::find($id)->delete();
        return redirect()->route('cimek')->with('message','A(z) '.$this->akt_cim->cim_cime.' cím törölve.');
    }
}
