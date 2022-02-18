<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        @include('livewire.sablon.grayPanel')
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
                        @include('livewire.sablon.textInput', ['param1' => "ugyf_azonosito", 'param2' => "Azonosító", 'param3' => "...azonosító"])
                        @error('ugyf_azonosito') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        @include('livewire.sablon.textInput', ['param1' => "ugyf_adoszam", 'param2' => "Adószám", 'param3' => "...adószám"])
                        @error('ugyf_adoszam') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col mb-4">
                        @include('livewire.sablon.textInput', ['param1' => "ugyf_kadoszam", 'param2' => "Közösségi adószám", 'param3' => "...közösségi adószám"])
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
                        @include('livewire.sablon.checkBox', ['param1' => "ugyf_aktiv", 'param2' => "Aktív"])
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
                        @include('livewire.sablon.textTextarea', ['param1' => "ugyf_leiras", 'param2' => "Leírás", 'param3' => "...leírás"])
                        @error('ugyf_leiras') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="pb-4">
                    @include('livewire.sablon.backSaveButton')
                </div>
            </form>
        </div>
    </div>
</div>