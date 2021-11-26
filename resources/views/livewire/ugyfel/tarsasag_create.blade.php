<div class="row">
    <div class="col mb-4">       
        <label for="tafa_id_select" class="col-sm-6 col-md-6 col-lg-6 col-xl-6 block text-gray-700 text-sm font-bold mb-2">Áfacsoport</label>                 
        <select class="form-control shadow col-sm-6 col-md-6 col-lg-6 col-xl-6" id="tafa_id_select" wire:model="tafa_id">                                
            @foreach($tafak as $tafa)
                <option value={{ $tafa->id }}>{{ $tafa->tafa_leiras }}</option>
            @endforeach
        </select>                                      
    </div>    
</div>
<div class="row">
    <div class="col mb-4">
        <label for="tars_cegnev_input" class="block text-gray-700 text-sm font-bold mb-2">Cég neve</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="tars_cegnev_input" wire:model="tars_cegnev"
            placeholder="...cégnév">
        @error('tars_cegnev') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>    
</div> 
<div class="row">
    <div class="col mb-4">
        <label for="tars_cegjszam_input" class="block text-gray-700 text-sm font-bold mb-2">Cégjegyzék szám</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="tars_cegjszam_input" wire:model="tars_cegjszam"
            placeholder="...cégjegyzék szám">
        @error('tars_cegjszam') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
</div>              
    