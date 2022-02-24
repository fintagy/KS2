<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Telefon;
use App\Models\Kapcsolat;

class TelefonCrud extends Component
{
    public $telefon, $ft_kapcsolat_id, $tel_szam, $tel_aktiv, $tel_letrehozas, $tel_mod, $telefon_id;
    public $kapcsolat, $fk_ugyfel_id, $fk_szemely_id, $kapcs_letrehozas, $kapcs_mod, $kapcsolat_id;
    private bool $ujRecord = false;
    public $akt_telefon;
    public $isModalOpen = 0;
    use WithPagination;

    public function render()
    {
        return view('livewire.Kapcsolat.Telefon_crud', [
            'telefonok0' => Telefon::paginate(6),
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
        $this->ft_kapcsolat_id = null; 
        $this->tel_szam = ''; 
        $this->tel_aktiv = true;
        $this->tel_letrehozas = Carbon::now();
        $this->tel_mod = Carbon::now();
    }
}
