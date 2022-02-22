<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Esemeny;

class EsemenyCardCrud extends Component
{
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.esemeny.esemeny_card');
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

    }
}
