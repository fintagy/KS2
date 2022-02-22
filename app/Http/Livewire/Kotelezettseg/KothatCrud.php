<?php

namespace App\Http\Livewire\Kotelezettseg;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Kothat;
use App\Models\Kottip;
use App\Models\Hatarnap;
use App\Models\Kotelezettseg;

class KothatCrud extends Component
{
    public $kothat, $fk_hatarnap_id, $fk_kotelezettseg_id, $kothat_letrehozas, $kothat_mod, $kothat_id;
    public $kotelezettseg, $fk_kottip_id, $kot_leiras, $kot_szam, $kot_kie, $kot_aktiv, $kot_letrehozas, $kot_mod, $kotelezettseg_id;
    public $hatarnap, $hatn_nap, $hatn_aktiv, $hatn_letrehozas, $hatn_mod, $hatarnap_id;
    private bool $ujRecord = false;
    
    public $isModalOpen = 0;

    use WithPagination;

    public function render()
    {
        return view('livewire.kotelezettseg.kothat_crud', [
            'kothatok0' => Kothat::paginate(6),
            'kotelezettsegek0' => Kotelezettseg::all(),

            'hatarnapok0' => Hatarnap::all(),
            'hatarnapok1' => Hatarnap::all()->where('hatn_aktiv', '1'),
            'hatarnapok2' => Hatarnap::where('hatn_aktiv', '1')
                                        ->orderBy('hatn_nap')
                                        ->get(),
                                        
            'kottipusok0' => Kottip::all()
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
        $this->fk_hatarnap_id = null;
        $this->fk_kotelezettseg_id = null;
        $this->kothat_letrehozas = Carbon::now();
        $this->kothat_mod = Carbon::now();
    }

    public function edit($id)
    {
        $this->resetErrorBag();
        $this->ujRecord = false;
        
        $kothat = Kothat::findOrFail($id);
        $this->kothat_id = $id;
        $this->fk_hatarnap_id = $kothat->hatarnap_id;
        $this->fk_kotelezettseg_id = $kothat->kotelezettseg_id;
        $this->kothat_letrehozas = $kothat->kothat_letrehozas;
        $this->kothat_mod = $kothat->kothat_mod;
        
        $this->openModalPopover();
    }
}
