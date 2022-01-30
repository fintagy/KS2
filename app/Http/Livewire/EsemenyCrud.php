<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\esemeny;

class EsemenyCrud extends Component
{
    public function render()
    {
        return view('livewire.esemeny.esemeny_crud', [            
            'esemenyek0' => esemeny::paginate(6)
        ]);
    }
    public function destroy(esemeny $esemeny)
    {
        $esemeny->delete();
        return redirect()->route('esemenyek')->with('success','Az ügyfél törölve.');
    }
}
