<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Szemely;
use App\Models\Ugyfel;

class SzemelyCrud extends Component
{
    public $szemely, $szem_beosztas, $szem_vezeteknev, $szem_keresztnev, $szem_aktiv, $szem_letrehozas, $szem_mod, $ugyfel_id;
    public $ugyfelid;
    public $akt_szemely;
    public $deleteId = '';

    public $isModalOpen = 0;
    
    use WithPagination;

    public function mount(Ugyfel $ugyfel){
        $this->ugyfelid = $ugyfel->id;
    }

    public function render()
    {
        if(isset($this->ugyfelid)){
            return view('livewire.szemely.szemely_crud', [
                'szemelyek0' => Szemely::where('ugyfel_id',  $this->ugyfelid)->paginate(6),
            ]);
        }else{
            return view('livewire.szemely.szemely_crud', [
                'szemelyek0' => Szemely::paginate(6),
            ]);
        }
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
        $this->ugyfel_id = 1;
        $this->szemely_id = null;
        $this->szem_beosztas = '';
        $this->szem_vezeteknev = '';
        $this->szem_keresztnev = '';
        $this->szem_aktiv = true;
        $this->szem_letrehozas = Carbon::now(); //
        $this->szem_mod = Carbon::now();
    }

    public function store()
    {
        $this->validate([
            'ugyfel_id' => 'required',
            'szem_beosztas' => 'required|max:100',
            'szem_vezeteknev' => 'required|max:50',
            'szem_keresztnev' => 'required|max:100'
        ]);
        Szemely::updateOrCreate(['id' => $this->szemely_id], [
            'ugyfel_id'=> $this->ugyfel_id,
            'szem_beosztas' => $this->szem_beosztas == "" ? null : $this->szem_beosztas,
            'szem_vezeteknev' => $this->szem_vezeteknev,
            'szem_keresztnev' => $this->szem_keresztnev,
            'szem_aktiv' => $this->szem_aktiv,
            'szem_letrehozas' => $this->szem_letrehozas,
            'szem_mod' => $this->szem_mod
        ]);
        
        session()->flash('message', $this->szemely_id ? $this->szem_vezeteknev." ".$this->szem_keresztnev.' adatai frissítve.' : 'Új személy rögztve.');
        
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $szemely = Szemely::findOrFail($id);
        $this->szemely_id = $id;
        $this->sz_ugyfel_id = $szemely->ugyfel_id;
        $this->szem_beosztas = $szemely->szem_beosztas;
        $this->szem_vezeteknev = $szemely->szem_vezeteknev;
        $this->szem_keresztnev = $szemely->szem_keresztnev;
        $this->szem_aktiv = $szemely->szem_aktiv == 0 ? false : true;
        $this->szem_letrehozas = $szemely->szem_letrehozas;
        $this->szem_mod = $szemely->szem_mod;
        
        $this->openModalPopover();
    }

    public function delete($id)
    {
        $this->akt_szemely = Szemely::find($id);
        Szemely::find($id)->delete();
        return redirect()->route('szemelyek')->with('message',$this->akt_szemely->szem_vezeteknev.' '.$this->akt_szemely->szem_keresztnev.' törölve.');
    }
    
        //???
    public function getkapcsolatok(Szemely $szemely)
    {        
        $szemelykapcsolatai = $szemely->kapcsolatok;
        return view('ugyfelw.hozzaferesek',compact('szemelykapcsolatai'));
    }

    public function getszemelyek(Ugyfel $ugyfel)
    {
        
        return view('livewire.szemely.szemely-crud', [
            'szemelyek0' => Szemely::where('ugyfel_id', $ugyfel->id)->paginate(7),
        ]);
    }
}
