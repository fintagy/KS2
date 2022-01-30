<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\esemeny;

class EsemenyCrud extends Component
{
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.esemeny.esemeny_crud', [            
            'esemenyek0' => esemeny::paginate(6)
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
              
    }

    public function destroy(esemeny $esemeny)
    {
        $esemeny->delete();
        return redirect()->route('esemenyek')->with('success','Az ügyfél törölve.');
    }
}
