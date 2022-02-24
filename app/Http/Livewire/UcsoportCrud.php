<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Ucsoport;

class UcsoportCrud extends Component
{
    public $ucsoport, $ucsop_nev, $ucsop_letrehozas, $ucsop_mod, $ucsoport_id;
    public $ugyfel, $ugyfel_id;
    public $kothat, $kothat_id;
    public $akt_esemeny;
    
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.Ugyfel.Ucsoport_crud', [
            'ucsoportok0' => Ucsoport::paginate(6),
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
        $this->ucsoport_id = null;
        $this->ucsop_nev = '';
        $this->ucsop_letrehozas = Carbon::now();
        $this->ucsop_mod = Carbon::now();
    }

    public function edit($id)
    {
        $ucsoport = Ucsoport::findOrFail($id);
        $this->ucsoport_id = $id;
        $this->ucsop_nev = $ucsoport->ucsop_nev;
        $this->ucsop_letrehozas = $ucsoport->ucsop_letrehozas;
        $this->ucsop_mod = $ucsoport->ucsop_mod;
        
        $this->openModalPopover();
    }

    public function store()
    {
        $this->validate([
            'ucsoport_id' => 'required',
            'ucsop_nev' => 'required|max:100',
        ]);
        Ucsoport::updateOrCreate(['id' => $this->ucsoport_id], [
            'ucsop_nev' => $this->ucsop_nev == "" ? null : $this->ucsop_nev,
            'ucsop_letrehozas' => $this->ucsop_letrehozas,
            'ucsop_mod' => $this->ucsop_mod
        ]);
        
        session()->flash('message', $this->ucsoport_id ? $this->ucsop_nev.' adatai frissítve.' : 'Új ügyfélcsoport rögztve.');
        
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function delete($id)
    {
        $this->akt_ucsoport = Ucsoport::find($id);
        Ucsoport::find($id)->delete();
        return redirect()->route('ucsoportok')->with('message',$this->akt_ucsoport->ucsop_nev.' törölve.');
    }
}