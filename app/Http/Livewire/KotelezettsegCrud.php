<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\kotelezettseg;

class KotelezettsegCrud extends Component
{
    public function render()
    {
        return view('livewire.kotelezettseg.kotelezettseg_crud');
    }

    public function destroy(kotelezettseg $kotelezettseg)
    {
        $kotelezettseg->delete();
        return redirect()->route('kotelezettsegek')->with('success','A kotelezettseg törölve.');
    }
}
