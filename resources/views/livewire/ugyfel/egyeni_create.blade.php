<div class="row">
    <div class="col mb-4">       
        <label for="evafa_id_select" class="col-sm-6 col-md-6 col-lg-6 col-xl-6 block text-gray-700 text-sm font-bold mb-2">Áfacsoport</label>                 
        <select class="form-control shadow col-sm-6 col-md-6 col-lg-6 col-xl-6" id="evafa_id_select" wire:model="evafa_id">                                
            @foreach($evafak as $evafa)
                <option value={{ $evafa->id }}>{{ $evafa->evafa_leiras }}</option>
            @endforeach
        </select>                                      
    </div>    
</div>
<div class="row">
    <div class="col mb-4">
        <label for="ev_okmnyszam_input" class="block text-gray-700 text-sm font-bold mb-2">Nyilvántartási szám</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="ev_okmnyszam_input" wire:model="ev_okmnyszam"
            placeholder="...nyilvántartási szám">
        @error('ev_okmnyszam') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
    <div class="col mb-4">
        <label for="ev_statszam_input" class="block text-gray-700 text-sm font-bold mb-2">Statisztikai számjel</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="ev_statszam_input" wire:model="ev_statszam"
            placeholder="...stat. szám">
        @error('ev_statszam') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
</div> 
<div class="row">
    <div class="col mb-4">
        <label for="ev_nev_input" class="block text-gray-700 text-sm font-bold mb-2">Név</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="ev_nev_input" wire:model="ev_nev"
            placeholder="...név">
        @error('ev_nev') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
</div>              
    