<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\esemeny;
use App\Models\ugyfel;
use App\Models\kothat;

class EsemenyCrud extends Component
{
    public $esemeny, $fugyfel_id, $fkothat_id, $esem_letrehozas, $esem_mod, $esemeny_id;
    public $ugyfel, $ugyfel_id;
    public $kothat, $kothat_id;
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.esemeny.esemeny_crud', [            
            'esemenyek0' => esemeny::paginate(6),
            'ugyfelek0' => ugyfel::All(),
            'kothatok0' => kothat::All(),
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
        $this->esemeny_id = null; 
        $this->fugyfel_id = null; 
        $this->fkothat_id = null;
        $this->esemeny_letrehozas = Carbon::now();
        $this->esemeny_mod = Carbon::now();
    }

    public function edit($id)
    {
        $this->resetErrorBag();
        $esemeny = esemeny::findOrFail($id);
        $this->esemeny_id = $id;
        $this->fugyfel_id = $esemeny->ugyfel_id;
        $this->fkothat_id = $esemeny->kothat_id;        
        $this->esemeny_letrehozas = $esemeny->esemeny_letrehozas;
        $this->esemeny_mod = $esemeny->esemeny_mod;
    
        $this->openModalPopover();
    }

    public function store()
    {         
        $this->validate([
            'fugyfel_id' => 'required',
            'fkothat_id' => 'required',
        ]);        
        esemeny::updateOrCreate(['id' => $this->esemeny_id], [            
            'ugyfel_id' => $this->fugyfel_id,
            'kothat_id' => $this->fkothat_id,            
            'esemeny_letrehozas' => $this->esemeny_letrehozas,
            'esemeny_mod' => $this->esemeny_mod,
        ]);        
        
        session()->flash('message', $this->esemeny_id ? $this->esemeny_id.' esemény frissítve.' : 'Új feladat rögzítve.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function destroy(esemeny $esemeny)
    {
        $esemeny->delete();
        return redirect()->route('esemenyek')->with('success','Az ügyfél törölve.');
    }
}
