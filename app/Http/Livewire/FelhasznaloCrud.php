<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\User;
use App\Models\jogosultsag;

class FelhasznaloCrud extends Component
{
    public $felhasznalo, $fjogosultsag_id, $name, $email, $active, $created_at, $updated_at, $users_id;
    public $jogosultsag, $jog_nev, $jog_leiras, $jog_aktiv, $jog_letrehozas, $jog_mod, $jogosultsag_id;
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.felhasznalo.felhasznalo_crud', [            
            'felhasznalok0' => User::paginate(6),            
            'jogosultsagok0' => jogosultsag::paginate(6),
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

    public function destroy(User $felhasznalo)
    {
        $felhasznalo->delete();
        return redirect()->route('felhasznalok')->with('message','A felhasználó törölve.');
    }

    private function resetCreateForm()
    {       
        $this->resetErrorBag(); //korábbi hibaüzenetek ürítése

        
    }

    public function edit($id)
    {
        $this->resetErrorBag();
        $felhasznalo = User::findOrFail($id);
        $this->Users_id = $id;    
        $this->fjogosultsag_id = $felhasznalo->jogosultsag_id;        
        $this->name = $felhasznalo->name;
        $this->email = $felhasznalo->email;        
        $this->active = $felhasznalo->active == 0 ? false : true;
        $this->created_at = $felhasznalo->created_at;        
        $this->updated_at = $felhasznalo->updated_at; 
        
        $this->openModalPopover();
    }

    public function store()
    {         
        $this->validate([
            'fkottip__id' => 'required',
            'kot_leiras' => 'required',
            'kot_kie' => 'required',
        ]);        
        User::updateOrCreate(['id' => $this->esemeny_id], [            
            'kottip__id' => $this->fkottip__id,
            'kot_leiras' => $this->kot_leiras,
            'kot_szam' => $this->kot_szam,
            'kot_kie' => $this->kot_kie,
            'kot_aktiv' => $this->kot_aktiv,            
            'kot_letrehozas' => $this->kot_letrehozas,
            'kot_mod' => $this->kot_mod,
        ]);        
        
        session()->flash('message', $this->esemeny_id ? $this->esemeny_id.' esemény frissítve.' : 'Új feladat rögzítve.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }
}
