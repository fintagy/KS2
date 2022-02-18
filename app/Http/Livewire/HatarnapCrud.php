<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\hatarnap;

class HatarnapCrud extends Component
{
    public $hatarnap, $hatn_nap, $hatn_aktiv, $hatn_letrehozas, $hatn_mod, $hatarnap_id;
    private $hatarnapok;
    public $search = '';
    public $isModalOpen = 0;
    public $objects = []; 
    
    use WithPagination;

    public function render()
    {
        return view('livewire.hatarnap.hatarnap_crud', [
            
            'hatarnapok0' => hatarnap::where('id', '>', '0')
                            ->orderBy("hatn_nap","ASC")
                            ->paginate(10),
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
        $this->hatarnap_id = null;        
        $this->hatn_nap = Carbon::now()->endOfDay()->format('Y-m-d\TH:i');        
        $this->hatn_aktiv = true;
        $this->hatn_letrehozas = Carbon::now();
        $this->hatn_mod = Carbon::now();
    }

    public function store()
    {         
        $this->resetErrorBag();               
        Hatarnap::updateOrCreate(['id' => $this->hatarnap_id], [
            
            'hatn_nap' => $this->hatn_nap,
            'hatn_aktiv' => $this->hatn_aktiv,            
            'hatn_letrehozas' => $this->hatn_letrehozas,
            'hatn_mod' => $this->hatn_mod            
        ]);        
        
        session()->flash('message', $this->hatarnap_id ? $this->hatn_nap.' adatai frissítve.' : 'Új határnap rögzítve.');
        
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $this->resetErrorBag();
        $hatarnap = Hatarnap::findOrFail($id);
        $this->hatarnap_id = $id;        
        $this->hatn_nap = date('Y-m-d\TH:i', strtotime($hatarnap->hatn_nap));
        $this->hatn_aktiv = $hatarnap->hatn_aktiv == 0 ? false : true;
        $this->hatn_letrehozas = $hatarnap->hatn_letrehozas;
        $this->hatn_mod = $hatarnap->hatn_mod;
        
        $this->openModalPopover();
    }

    public function destroy(hatarnap $hatarnap)
    {
        $hatarnap->delete();
        return redirect()->route('hatarnapok')->with('message','A határnap törölve.');
    }
}
