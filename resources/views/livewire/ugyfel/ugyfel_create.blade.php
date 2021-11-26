<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form class="bg-white sm:p-6 sm:pb-4">
                <div class="row">
                    <div class="col mb-4">
                        <label for="ucsoport_id_select" class="col-sm-6 col-md-6 col-lg-6 col-xl-6 block text-gray-700 text-sm font-bold mb-2">Cégforma</label>                 
                        <select class="form-control shadow col-sm-6 col-md-6 col-lg-6 col-xl-6" id="ucsoport_id_select" wire:model="u_ucsoport_id">                                                    
                            @foreach($ucsoportok0 as $ucsoport)
                                <option value={{ $ucsoport->id }}>{{ $ucsoport->ucsop_nev }}</option>
                            @endforeach                            
                        </select>
                        <script>
                            $('#ucsoport_id_select').prop('selectedIndex', -1)
                        </script>
                    </div>
                    <div class="col mb-4">
                        <label for="ugyf_azonosito_input" class="block text-gray-700 text-sm font-bold mb-2">Azonosító</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="ugyf_azonosito_input" wire:model="ugyf_azonosito"
                            placeholder="...azonosító">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="ugyf_adoszam_input" class="block text-gray-700 text-sm font-bold mb-2">Adószám</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="ugyf_adoszam_input" wire:model="ugyf_adoszam"
                            placeholder="...adószám">
                        @error('ugyf_adoszam') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col mb-4">
                        <label for="ugyf_kadoszam_input" class="block text-gray-700 text-sm font-bold mb-2">Közösségi adószám</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="ugyf_kadoszam_input" wire:model="ugyf_kadoszam"
                            placeholder="...közösségi adószám">
                        @error('ugyf_kadoszam') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>     
                </div> 
                <div class="row">
                    <div class="col mb-4">
                        <label for="ugyf_alapitas_input" class="block text-gray-700 text-sm font-bold mb-2">Alapítás</label>
                        <script> const maxdate = Date.now(); </script>
                        <input type="date"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="ugyf_alapitas_input" value="{{$this->ugyf_alapitas}}" wire:model="ugyf_alapitas" max="<?= date('Y-m-d'); ?>">
                        @error('ugyf_alapitas') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col mb-4">
                        <label for="ugyf_aktiv_input" class="block text-gray-700 text-sm font-bold mb-2">Aktív</label>
                        <input type="checkbox" id="ugyf_aktiv_input" value="{{$this->ugyf_aktiv}}" wire:model="ugyf_aktiv" >
                        @error('ugyf_aktiv') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>  
                </div>
                @switch($this->u_ucsoport_id)
                @case(1)
                    @include('livewire.ugyfel.magan_create')
                    @break

                @case(2)
                    @include('livewire.ugyfel.egyeni_create')
                    @break

                @case(3)
                    @include('livewire.ugyfel.tarsasag_create')
                    @break
                
                @endswitch
                <div class="row">
                    <div class="col mb-4">
                        <label for="ugyf_leiras_textarea" class="block text-gray-700 text-sm font-bold mb-2">Leírás</label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="ugyf_leiras_textarea" placeholder="...leírás" wire:model="ugyf_leiras"></textarea>
                        @error('ugyf_leiras') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col mb-4 float-end">
                    <button wire:click="closeModalPopover()" type="button" class="btn btn-secondary shadow-sm" title="{{ __('messages.Back') }}"><i class="fas fa-arrow-left"></i></button>
                    <button wire:click.prevent="store()" type="button" class="btn btn-success shadow-sm" title="{{ __('messages.Save') }}"><i class="far fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>