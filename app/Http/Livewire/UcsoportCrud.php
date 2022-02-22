<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Ucsoport;
use App\Models\Ugyfel;
use App\Models\Kothat;

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
        return view('livewire.ugyfel.ucsoport_crud', [
            'ucsoportok0' => Ucsoport::paginate(6),
        ]);
    }
}