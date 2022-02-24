<?php

namespace App\Http\Livewire\Kotelezettseg;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Kotelezettseg;
use App\Models\kottip;

class KotelezettsegCrud extends Component
{
    public $kotelezettseg, $fk_kottip_id, $kot_leiras, $kot_szam, $kot_kie, $kot_aktiv, $kot_letrehozas, $kot_mod, $kotelezettseg_id;
    public $kottip, $kottip_nev, $kottip_letrehozas, $kottip_mod, $kottip_id;
    public $akt_kotelezettseg;
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.Kotelezettseg.Kotelezettseg_crud', [
            'kotelezettsegek0' => Kotelezettseg::paginate(6),
            'kottipek0' => Kottip::paginate(6),
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
        $this->fk_kottip_id = null;
        $this->kot_leiras = null;
        $this->kot_szam = null; 
        $this->kot_kie = null;
        $this->kot_aktiv = true;
        $this->kot_letrehozas = Carbon::now();
        $this->kot_mod = Carbon::now();
    }

    public function edit($id)
    {
        $this->resetErrorBag();
        $kotelezettseg = Kotelezettseg::findOrFail($id);
        $this->kotelezettseg_id = $id;
        $this->fk_kottip_id = $kotelezettseg->kottip_id;
        $this->kot_leiras = $kotelezettseg->kot_leiras;
        $this->kot_szam = $kotelezettseg->kot_szam;
        $this->kot_kie = $kotelezettseg->kot_kie;
        $this->kot_aktiv = $kotelezettseg->kot_aktiv == 0 ? false : true;
        $this->kot_letrehozas = $kotelezettseg->kot_letrehozas;
        $this->kot_mod = $kotelezettseg->kot_mod;
        
        $this->openModalPopover();
    }

    public function store()
    {         
        $this->validate([
            'fk_kottip_id' => 'required',
            'kot_leiras' => 'required',
            'kot_kie' => 'required',
        ]);
        Kotelezettseg::updateOrCreate(['id' => $this->esemeny_id], [
            'kottip_id' => $this->fk_kottip_id,
            'kot_leiras' => $this->kot_leiras,
            'kot_szam' => $this->kot_szam,
            'kot_kie' => $this->kot_kie,
            'kot_aktiv' => $this->kot_aktiv,
            'kot_letrehozas' => $this->kot_letrehozas,
            'kot_mod' => $this->kot_mod,
        ]);
        
        session()->flash('message', $this->esemeny_id ? $this->esemeny_id.' esemény frissítve.' : 'Új feladat rögzítve.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function delete($id)
    {
        $this->akt_kotelezettseg = Kotelezettseg::find($id);
        Kotelezettseg::find($id)->delete();
        return redirect()->route('kotelezettsegek')->with('message','A(z) '.$this->akt_kotelezettseg->kot_szam.' törölve.');
    }
}
