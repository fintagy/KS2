<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Jogosultsag;

class FelhasznaloCrud extends Component
{
    public $felhasznalo, $ff_jogosultsag_id, $name, $email, $active, $created_at, $updated_at, $users_id;
    public $jogosultsag, $jog_nev, $jog_leiras, $jog_aktiv, $jog_letrehozas, $jog_mod, $jogosultsag_id;
    public $akt_felhasznalo;
    private bool $ujRecord = false;
    public $isModalOpen = 0;
    
    use WithPagination;

    public function render()
    {
        return view('livewire.Felhasznalo.Felhasznalo_crud', [
            'felhasznalok0' => User::paginate(6),
            'jogosultsagok0' => Jogosultsag::all(),
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
        $this->ff_jogosultsag_id = null;
        $this->name = '';
        $this->email = '';
        $this->active = true;
        $this->created_at = Carbon::now();
        $this->updated_at = Carbon::now();
        $this->resetErrorBag(); //korábbi hibaüzenetek ürítése
    }

    public function edit($id)
    {
        $this->resetErrorBag();
        $this->ujRecord = false;

        $felhasznalo = User::findOrFail($id);
        $this->Users_id = $id;
        $this->ff_jogosultsag_id = $felhasznalo->jogosultsag_id;
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
            'ff_kottip_id' => 'required',
            'kot_leiras' => 'required',
            'kot_kie' => 'required',
        ]);
        User::updateOrCreate(['id' => $this->esemeny_id], [
            'kottip_id' => $this->ff_kottip_id,
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

    public function delete($id)
    {
        $this->akt_felhasznalo = User::find($id);
        User::find($id)->delete();
        return redirect()->route('felhasznalok')->with('message','A(z) '.$this->akt_felhasznalo->name.' cím törölve.');
    }
}
