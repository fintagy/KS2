<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Imel;
use App\Models\Kapcsolat;

class ImelCrud extends Component
{
    public $imail, $fe_kapcsolat_id, $imel_cim, $imel_aktiv, $imel_letrehozas, $imel_mod, $imel_id;
    public $kapcsolat, $fk_ugyfel_id, $fk_szemely_id, $kapcs_letrehozas, $kapcs_mod, $kapcsolat_id;
    private bool $ujRecord = false;
    public $akt_telefon;
    public $isModalOpen = 0;
    use WithPagination;

    public function render()
    {
        return view('livewire.Kapcsolat.Imel_crud', [
            'imelek0' => Imel::paginate(6),
            'kapcsolatok0' => Kapcsolat::all(),
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
        $this->fe_kapcsolat_id = null; 
        $this->imel_cim = ''; 
        $this->imel_aktiv = true;
        $this->imel_letrehozas = Carbon::now();
        $this->imel_mod = Carbon::now();
    }
}
