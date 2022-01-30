<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;

use App\Models\hatarnap;

class HatarnapCrud extends Component
{
    public $hatarnap, $hatn_nap, $hatn_aktiv, $hatn_letrehozas, $hatn_mod;
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.hatarnap.hatarnap_crud', [            
            'hatarnapok0' => hatarnap::paginate(10)
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
        $this->hatarnap_id = null;        
        $this->hatn_nap = Carbon::now()->endOfDay()->format('Y-m-d\TH:i');        
        $this->hatn_aktiv = true;
        $this->hatn_letrehozas = Carbon::now();
        $this->hatn_mod = Carbon::now();
    }

    public function destroy(hatarnap $hatarnap)
    {
        $hatarnap->delete();
        return redirect()->route('hatarnapok')->with('success','A határnap törölve.');
    }
}
