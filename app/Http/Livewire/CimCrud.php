<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class CimCrud extends Component
{
    public function render()
    {
        return view('livewire.cim.cim_crud');
    }
}
