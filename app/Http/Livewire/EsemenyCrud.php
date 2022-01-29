<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EsemenyCrud extends Component
{
    public function render()
    {
        return view('livewire.esemeny.esemeny_crud');
    }
    public function cards()
    {
        return view('livewire.esemeny.esemeny_card');
    }
}
