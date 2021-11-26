<div class="row">
    <div class="col mb-4">       
        <label for="msafa_id_select" class="col-sm-6 col-md-6 col-lg-6 col-xl-6 block text-gray-700 text-sm font-bold mb-2">Áfacsoport</label>                 
        <select class="form-control shadow col-sm-6 col-md-6 col-lg-6 col-xl-6" id="msafa_id_select" wire:model="m_msafa_id">                                
            @foreach($msafak as $msafa)
                <option value={{ $msafa->id }}>{{ $msafa->msafa_leiras }}</option>
            @endforeach
        </select>
        <script>
            $('#msafa_id_select').prop('selectedIndex', -1)
        </script>
    </div>
</div>
<div class="row">                    
    <div class="col mb-4">
        <label for="ms_adoazonosito_input" class="block text-gray-700 text-sm font-bold mb-2">Adóazonosító</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="ms_adoazonosito_input" wire:model="ms_adoazonosito"
            placeholder="...adóazonosító">
        @error('ms_adoazonosito') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
    <div class="col mb-4">
        <label for="ms_tajszam_input" class="block text-gray-700 text-sm font-bold mb-2">TAJ szám</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="ms_tajszam_input" wire:model="ms_tajszam"
            placeholder="...TAJ szám">
        @error('ms_tajszam') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>     
</div> 
<div class="row">
    <div class="col mb-4">
        <label for="ms_szulhely_input" class="block text-gray-700 text-sm font-bold mb-2">Születési hely</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="ms_szulhely_input" wire:model="ms_szulhely"
            placeholder="...születési hely">
        @error('ms_szulhely') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>    
    <div class="col mb-4">
        <label for="ms_szulido_input" class="block text-gray-700 text-sm font-bold mb-2">Születési idő</label>
        <script> const maxdate = Date.now(); </script>
        <input type="date"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="ms_szulido_input" value="{{$this->ms_szulido}}" wire:model="ms_szulido" max="<?= date('Y-m-d'); ?>">
        @error('ms_szulido') <span class="text-red-500">{{ $message }}</span>@enderror                            
    </div>    
</div>               
<div class="row">
<div class="col mb-4">
        <label for="ms_aneve_input" class="block text-gray-700 text-sm font-bold mb-2">Anyja neve</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="ms_aneve_input" wire:model="ms_aneve"
            placeholder="...Anyja neve">
        @error('ms_aneve') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>   
    <div class="col mb-4">
        <label for="ms_szigszam_input" class="block text-gray-700 text-sm font-bold mb-2">Személyi igazolvány száma</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="ms_szigszam_input" wire:model="ms_szigszam"
            placeholder="...szig. szám">
        @error('ms_szigszam') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>   
</div>               