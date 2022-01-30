<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\kotelezettseg;

class KotelezettsegCrud extends Component
{
    public $kotelezettseg, $kottip_id, $kot_leiras, $kot_szam, $kot_aktiv, $kot_letrehozas, $kot_mod;
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.kotelezettseg.kotelezettseg_crud', [            
            'kotelezettsegek0' => kotelezettseg::paginate(6)
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

    private function resetCreateForm(){
        $this->kotelezettseg_id = null;        
        $this->kottip_id = '';
        $this->kot_leiras = '';
        $this->kot_szam = ''; 
        $this->kot_kie = '';
        $this->kot_aktiv = true;
        $this->kot_letrehozas = Carbon::now();
        $this->kot_mod = Carbon::now();
    }

    public function edit($id)
    {
        $kotelezettseg = kotelezettseg::findOrFail($id);
        $this->kotelezettseg_id = $id;    
        $this->kottip__id = $kotelezettseg->kottip_id;        
        $this->kot_leiras = $kotelezettseg->kot_leiras;
        $this->kot_szam = $kotelezettseg->kot_szam;
        $this->kot_kie = $kotelezettseg->kot_kie;
        $this->kot_aktiv = $kotelezettseg->kot_aktiv == 0 ? false : true;
        $this->kot_letrehozas = $kotelezettseg->kot_letrehozas;        
        $this->kot_mod = $kotelezettseg->kot_mod;       
        
        $this->openModalPopover();
    }

    public function destroy(kotelezettseg $kotelezettseg)
    {
        $kotelezettseg->delete();
        return redirect()->route('kotelezettsegek')->with('success','A kotelezettseg törölve.');
    }
}
