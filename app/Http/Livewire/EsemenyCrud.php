<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Esemeny;
use App\Models\Ugyfel;
use App\Models\Kothat;

class EsemenyCrud extends Component
{
    public $esemeny, $fe_ugyfel_id, $fe_kothat_id, $esem_letrehozas, $esem_mod, $esemeny_id;
    public $ugyfel, $ugyfel_id;
    public $kothat, $kothat_id;
    public $akt_esemeny;
    private bool $ujRecord = false;

    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.esemeny.esemeny_crud', [
            'esemenyek0' => Esemeny::paginate(6),
            'ugyfelek0' => Ugyfel::All(),
            'kothatok0' => Kothat::All(),
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
        $this->esemeny_id = null; 
        $this->fe_ugyfel_id = null; 
        $this->fe_kothat_id = null;
        $this->esemeny_letrehozas = Carbon::now();
        $this->esemeny_mod = Carbon::now();
    }

    public function edit($id)
    {
        $this->resetErrorBag();
        $this->ujRecord = false;
        
        $esemeny = Esemeny::findOrFail($id);
        $this->esemeny_id = $id;
        $this->fe_ugyfel_id = $esemeny->ugyfel_id;
        $this->fe_kothat_id = $esemeny->kothat_id;
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
        Esemeny::updateOrCreate(['id' => $this->esemeny_id], [
            'ugyfel_id' => $this->fugyfel_id,
            'kothat_id' => $this->fkothat_id,
            'esemeny_letrehozas' => $this->esemeny_letrehozas,
            'esemeny_mod' => $this->esemeny_mod,
        ]);
        
        session()->flash('message', $this->esemeny_id ? $this->esemeny_id.' esemény frissítve.' : 'Új feladat rögzítve.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function delete($id)
    {
        $this->akt_esemeny = Esemeny::find($id);
        Esemeny::find($id)->delete();
        return redirect()->route('esemenyek')->with('message','Az esemény törölve.');
    }
}
