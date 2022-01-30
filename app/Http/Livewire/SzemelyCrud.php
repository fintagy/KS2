<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;

use App\Models\szemely;
use App\Models\ugyfel;

class SzemelyCrud extends Component
{
    public $szemely, $sz_ugyfel_id, $szem_beosztas, $szem_vezeteknev, $szem_keresztnev, $szem_aktiv, $szem_letrehozas, $szem_mod;
    public $ugyfelid;
    public $deleteId = '';

    public $isModalOpen = 0;
    
    use WithPagination;

    public function mount(ugyfel $ugyfel){
        $this->ugyfelid = $ugyfel->id;
    }

    public function render()
    {              
        if(isset($this->ugyfelid)){            
            return view('livewire.szemely.szemely_crud', [
                'szemelyek0' => szemely::where('ugyfel_id',  $this->ugyfelid)->paginate(7),
            ]);
        }else{
            return view('livewire.szemely.szemely_crud', [            
                'szemelyek0' => szemely::paginate(6),
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
        $this->szemely_id = null;        
        $this->szem_beosztas = '';
        $this->szem_vezeteknev = '';
        $this->szem_keresztnev = '';       
        $this->szem_letrehozas = Carbon::now(); //
        $this->szem_mod = Carbon::now();
        $this->szem_aktiv = true;        
    }

    public function store()
    {         
        $this->validate([
            'sz_ugyfel_id' => 'required',
            'szem_beosztas' => 'max:100',
            'szem_vezeteknev' => 'required|max:50',
            'szem_keresztnev' => 'required|max:100'
        ]);        
        szemely::updateOrCreate(['id' => $this->szemely_id], [
            'ugyfel_id'=> $this->sz_ugyfel_id,
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
        $szemely = szemely::findOrFail($id);
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

    public function destroy(szemely $szemely)
    {
        $szemely->delete();
        return redirect()->route('szemelyek')->with('success','A személy törölve.');
    }
    
        //???
    public function getkapcsolatok(szemely $szemely)
    {        
        $szemelykapcsolatai = $szemely->kapcsolatok;
        return view('ugyfelw.hozzaferesek',compact('szemelykapcsolatai'));        
    }

    public function getszemelyek(ugyfel $ugyfel)
    {        
        return view('livewire.szemely.szemely-crud', [
            'szemelyek0' => szemely::where('ugyfel_id', $ugyfel->id)->paginate(7),
        ]);
    }
}
