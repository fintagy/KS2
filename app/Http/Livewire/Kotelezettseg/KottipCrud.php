<?php

namespace App\Http\Livewire\Kotelezettseg;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Kottip;

class KottipCrud extends Component
{
    public $kottip, $kottip_nev, $kottip_letrehozas, $kottip_mod, $kottip_id;
    public $akt_kottip;
    public $isModalOpen = 0;

    public function render()
    {
        return view('livewire.Kotelezettseg.Kottip_crud', [
            'kottipusok0' => Kottip::paginate(6),
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
        $this->resetErrorBag(); //korábbi hibaüzenetek ürítése
        $this->kottip_id = null;
        $this->kottip_nev = '';
        $this->kottip_letrehozas = Carbon::now();
        $this->kottip_mod = Carbon::now();
    }

    public function edit($id)
    {
        $this->resetErrorBag();
        $kottip = Kottip::findOrFail($id);
        $this->kottip_id = $id;
        $this->kottip_nev = $kottip->kottip_nev;
        $this->kottip_letrehozas = $kottip->kottip_letrehozas;
        $this->kottip_mod = $kottip->kottip_mod;
        
        $this->openModalPopover();
    }

    public function store()
    {
        $this->resetErrorBag();
        Kottip::updateOrCreate(['id' => $this->kottip_id], [
            'kottip_nev' => $this->kottip_nev,
            'kottip_letrehozas' => $this->kottip_letrehozas,
            'kottip_mod' => $this->kottip_mod
        ]);
        
        session()->flash('message', $this->kottip_id ? $this->kottip_nev.' adatai frissítve.' : 'Új bevallás típus rögzítve.');
        
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function delete($id)
    {
        $this->akt_kottip = Kottip::find($id);
        Kottip::find($id)->delete();
        return redirect()->route('kottipusok')->with('message','A(z) '.$this->akt_kottip->kottip_nev.' törölve.');
    }
}
