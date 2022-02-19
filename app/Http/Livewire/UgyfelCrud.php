<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;

use Illuminate\Validation\Rule;
use App\Models\ugyfel;
use App\Models\ucsoport;
use App\Models\maganszemely;
use App\Models\egyenivallalkozo;
use App\Models\tarsasag;
use App\Models\msafa;
use App\Models\evafa;
use App\Models\szemely;
use App\Models\tafa;

class UgyfelCrud extends Component
{
    public $ugyfel, $fu_ucsoport_id, $ugyf_azonosito, $ugyf_leiras, $ugyf_adoszam, $ugyf_kadoszam, $ugyf_alapitas, $ugyf_aktiv, $ugyf_letrehozas, $ugyf_mod, $ugyfel_id;
    public $ucsoport, $ucsop_nev, $ucsop_letrehozas, $ucsop_mod, $ucsoport_id;
    public $maganszemely, $fm_ugyfel_id, $fm_msafa_id, $ms_adoazonosito, $ms_tajszam, $ms_szulhely, $ms_szulido, $ms_aneve, $ms_szigszam, $ms_letrehozas, $ms_mod, $maganszemely_id;
    public $msafa, $msafa_kod, $msafa_leiras, $msafa_letrehozas, $msafa_mod, $msafa_id;
    public $egyenivallalkozo, $fe_ugyfel_id, $fe_evafa_id, $ev_okmnyszam, $ev_statszam, $ev_nev, $ev_letrehozas, $ev_mod, $egyenivallalkozo_id;
    public $evafa, $evafa_kod, $evafa_leiras, $evafa_letrehozas, $evafa_mod, $evafa_id;
    public $tarsasag, $ft_ugyfel_id, $ft_tafa_id, $tars_cegnev, $tars_cegjszam, $tars_letrehozas, $tars_mod, $tarsasag_id;
    public $tafa, $tafa_kod, $tafa_leiras, $tafa_letrehozas, $tafa_mod, $tafa_id;
    
    public $temp_ugyfel;
    public $ugyfeltipuskod;
     
    public $isModalOpen = 0;
    
    use WithPagination; 

    public function render()
    {   
        return view('livewire.ugyfel.ugyfel_crud', [ 

            'ugyfelek0' => ugyfel::paginate(6),
            'ucsoportok0' => ucsoport::all(),
            'maganszemelyek0' => maganszemely::all(),
            'egyenivallalkozok0' => egyenivallalkozo::all(),
            'tarsasagok0' => tarsasag::all(),
            'msafak0' => msafa::all(),
            'evafak0' => evafa::all(),
            'tafak0' => tafa::all()
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

    private function resetCreateForm()
    {
        $this->resetErrorBag(); //korábbi hibaüzenetek ürítése
        $this->ugyfel_id = null;
        $this->fu_ucsoport_id = null;
        $this->ugyf_azonosito = null;
        $this->ugyf_leiras = '';
        $this->ugyf_adoszam = '';
        $this->ugyf_kadoszam = '';
        $this->ugyf_alapitas = Carbon::now()->format('Y-m-d');
        $this->ugyf_letrehozas = Carbon::now(); //
        $this->ugyf_mod = Carbon::now();
        $this->ugyf_aktiv = true;

        $this->maganszemely_id = null;
        $this->fm_ugyfel_id = null;
        $this->fm_msafa_id = null;
        $this->ms_adoazonosito = '';
        $this->ms_tajszam = '';
        $this->ms_szulhely = '';
        $this->ms_szulido = '';
        $this->ms_aneve = '';
        $this->ms_szigszam = '';
        $this->ms_letrehozas = Carbon::now();
        $this->ms_mod = Carbon::now();

        $this->egyenivallalkozo_id = null;
        $this->fe_ugyfel_id = null;
        $this->fe_evafa_id = null;
        $this->ev_okmnyszam = '';
        $this->ev_statszam = '';
        $this->ev_nev = '';
        $this->ev_letrehozas = Carbon::now();
        $this->ev_mod = Carbon::now();

        $this->tarsasag_id = null;
        $this->ft_ugyfel_id = null;
        $this->ft_tafa_id = null;
        $this->tars_cegnev = '';
        $this->tars_cegjszam  = '';
        $this->tars_letrehozas = Carbon::now();
        $this->tars_mod = Carbon::now();
    }

    public function store()
    {         
        $this->validate([
            'fu_ucsoport_id' => 'required',
            'ugyf_azonosito' => 'max:10',
            'ugyf_leiras' => 'max:255',
            'ugyf_adoszam' => 'max:13',
            'ugyf_kadoszam' => 'max:13',
            'ugyf_alapitas' => 'date',
        ]);        
        ugyfel::updateOrCreate(['id' => $this->ugyfel_id], [
            'ucsoport_id'=> $this->fu_ucsoport_id,
            'ugyf_azonosito' => $this->ugyf_azonosito,
            'ugyf_leiras' => $this->ugyf_leiras == "" ? null : $this->ugyf_leiras,
            'ugyf_adoszam' => $this->ugyf_adoszam == "" ? null : $this->ugyf_adoszam,
            'ugyf_kadoszam' => $this->ugyf_kadoszam == "" ? null : $this->ugyf_kadoszam,
            'ugyf_alapitas' => $this->ugyf_alapitas == "" ? null : $this->ugyf_alapitas,
            'ugyf_letrehozas' => $this->ugyf_letrehozas,
            'ugyf_mod' => $this->ugyf_mod,
            'ugyf_aktiv' => $this->ugyf_aktiv,
        ]);        
        $this->temp_ugyfel = ugyfel::all()->last();
        switch ($this->u_ucsoport_id) {
            case 1:
                $this->validate([ 
                    'ms_adoazonosito' => [Rule::unique('maganszemely')->ignore($this->maganszemely_id)],
                    'ms_tajszam' => ['max:9',Rule::unique('maganszemely')->ignore($this->maganszemely_id)],
                    'ms_szigszam' => ['max:8',Rule::unique('maganszemely')->ignore($this->maganszemely_id)]
                ]);  
                maganszemely::updateOrCreate(['id' => $this->maganszemely_id], [
                    'ugyfel_id'=> $this->ugyfel_id == "" ? $this->temp_ugyfel->id : $this->ugyfel_id,
                    'msafa_id' => $this->m_msafa_id,
                    'ms_adoazonosito' => $this->ms_adoazonosito == "" ? null : $this->ms_adoazonosito,
                    'ms_tajszam' => $this->ms_tajszam == "" ? null : $this->ms_tajszam,
                    'ms_szulhely' => $this->ms_szulhely == "" ? null : $this->ms_szulhely,
                    'ms_szulido' => $this->ms_szulido == "" ? null : $this->ms_szulido,
                    'ms_aneve' => $this->ms_aneve == "" ? null : $this->ms_aneve,
                    'ms_szigszam' => $this->ms_szigszam == "" ? null : $this->ms_szigszam,
                    'ms_letrehozas' => $this->ms_letrehozas,
                    'ms_mod' => $this->ms_mod
                ]);  
                break;
            case 2:
                egyenivallalkozo::updateOrCreate(['id' => $this->egyenivallalkozo_id], [
                    'ugyfel_id'=> $this->temp_ugyfel->id,
                    'evafa_id' => $this->evafa_id,
                    'ev_okmnyszam' => $this->ev_okmnyszam == "" ? null : $this->ev_okmnyszam,
                    'ev_statszam' => $this->ev_statszam == "" ? null : $this->ev_statszam,
                    'ev_nev' => $this->ev_nev == "" ? null : $this->ev_nev,
                    'ev_letrehozas' => $this->ev_letrehozas,
                    'ev_mod' => $this->ev_mod
                ]);  
                break;
            case 3:
                tarsasag::updateOrCreate(['id' => $this->tarsasag_id], [
                    'ugyfel_id'=> $this->temp_ugyfel->id,
                    'tafa_id' => $this->tafa_id,
                    'tars_cegnev' => $this->tars_cegnev,
                    'tars_cegjszam' => $this->tars_cegjszam == "" ? null : $this->tars_cegjszam,
                    'tars_letrehozas' => $this->tars_letrehozas,
                    'tars_mod' => $this->tars_mod
                ]);  
                break;
        }
        session()->flash('message', $this->ugyfel_id ? $this->ugyf_azonosito.' ügyfél adatai frissítve.' : 'Új ügyfél létrehozva.');
        
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $this->resetErrorBag(); 
        $ugyfel = ugyfel::findOrFail($id);
        $this->ugyfel_id = $id;
        $this->fu_ucsoport_id = $ugyfel->ucsoport_id;
        $this->ugyf_azonosito = $ugyfel->ugyf_azonosito;
        $this->ugyf_leiras = $ugyfel->ugyf_leiras;
        $this->ugyf_adoszam = $ugyfel->ugyf_adoszam;
        $this->ugyf_kadoszam = $ugyfel->ugyf_kadoszam;
        $this->ugyf_alapitas = $ugyfel->ugyf_alapitas;
        $this->ugyf_letrehozas = $ugyfel->ugyf_letrehozas;
        $this->ugyf_mod = $ugyfel->ugyf_mod;
        $this->ugyf_aktiv = $ugyfel->ugyf_aktiv == 0 ? false : true;

        switch ($this->fu_ucsoport_id) {
            case 1:
                $maganszemely = maganszemely::where('ugyfel_id', '=', $id)->firstOrFail();
                $this->maganszemely_id =$maganszemely->id;
                $this->fm_ugyfel_id = $maganszemely->ugyfel_id;
                $this->fm_msafa_id = $maganszemely->msafa_id;
                $this->ms_adoazonosito = $maganszemely->ms_adoazonosito;
                $this->ms_tajszam = $maganszemely->ms_tajszam;
                $this->ms_szulhely = $maganszemely->ms_szulhely;
                $this->ms_szulido = $maganszemely->ms_szulido;
                $this->ms_aneve = $maganszemely->ms_aneve;
                $this->ms_szigszam = $maganszemely->ms_szigszam;
                $this->ms_letrehozas = $maganszemely->ms_letrehozas;
                $this->ms_mod = $maganszemely->ms_mod;
                break;
            case 2:
                $egyenivallalkozo = egyenivallalkozo::where('ugyfel_id', '=', $id)->firstOrFail();
                $this->egyenivallalkozo_id = $egyenivallalkozo->egyenivallalkozo_id;
                $this->fe_ugyfel_id = $egyenivallalkozo->ugyfel_id;
                $this->fe_evafa_id = $egyenivallalkozo->evafa_id;
                $this->ev_okmnyszam = $egyenivallalkozo->ev_okmnyszam;
                $this->ev_statszam = $egyenivallalkozo->ev_statszam;
                $this->ev_nev = $egyenivallalkozo->ev_nev;
                $this->ev_letrehozas = $egyenivallalkozo->ev_letrehozas;
                $this->ev_mod = $egyenivallalkozo->ev_mod;
                break;
            case 3:
                $tarsasag = tarsasag::where('ugyfel_id', '=', $id)->firstOrFail();
                $this->tarsasag_id = $tarsasag->tarsasag_id;
                $this->ft_ugyfel_id = $tarsasag->ugyfel_id;
                $this->ft_tafa_id = $tarsasag->tafa_id;
                $this->tars_cegnev = $tarsasag->tars_cegnev;
                $this->tars_cegjszam  = $tarsasag->tars_cegjszam;
                $this->tars_letrehozas = $tarsasag->tars_letrehozas;
                $this->tars_mod = $tarsasag->tars_mod;
                break;
            }   
        $this->openModalPopover();
    }
  
    public function NAVcsoport(ugyfel $ugyfel)
    {        
        switch($ugyfel->ucsoport_id) {
            case 1:
                $this->ugyfeltipuskod = $this->maganszemely::where('ugyfel_id', $ugyfel->id)->firstOrFail()->msafa->msafa_kod;
                break;
            case 2:
                $this->ugyfeltipuskod = $this->egyenivallalkoz::where('ugyfel_id', $ugyfel->id)->firstOrFail()->evafa->evafa_kod;
                break;
            case 3:
                $this->ugyfeltipuskod = $this->tarsasag::where('ugyfel_id', $ugyfel->id)->firstOrFail()->tafa->tafa_kod;
                break;
        }                
        return $this->ugyfeltipuskod;   
    }

    public function delete($id)
    {
        $this->akt_ugyfel = ugyfel::find($id);
        ugyfel::find($id)->delete();
        return redirect()->route('ugyfelek.render')->with('message','A(z) '.$this->akt_ugyfel->ugyf_leiras.' törölve.');
    }
}
