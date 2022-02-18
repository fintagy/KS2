<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\cim;

class CimCrud extends Component
{
    public $cim, $f_kapcsolat_id, $cim_cime, $cim_aktiv, $cim_letrehozas, $cim_mod, $cim_id;
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.cim.cim_crud', [            
            'cimek0' => cim::paginate(6)
        ]);
    }

    public function create()
    {
        $this->resetCreateForm();
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
    }
    
    public function destroy(cim $cim)
    {
        $cim->delete();
        return redirect()->route('cimek')->with('message','A cím törölve.');
    }
}
