<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        @include('livewire.sablon.grayPanel')
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form class="bg-white sm:p-6 sm:pb-4">
                <div class="row">                   
                    <div class="col mb-4">
                        @include('livewire.sablon.textInput', ['param1' => "azonosito", 'param2' => "Azonosító", 'param3' => "...belső azon."])
                        @error('azonosito_input') <span class="text-red-500">{{ $message }}</span>@enderror                    
                    </div>
                    <div class="col-6 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Ügyfél</label>
                        <select class="form-control shadow col-sm-6 col-md-6 col-lg-6 col-xl-6" id="ugyfel_id_select" wire:model="fugyfel_id">
                            @foreach($ugyfelek0 as $ugyfel)
                                <option value={{ $ugyfel->id }}>{{ $ugyfel->ugyf_adoszam }}</option>
                            @endforeach
                        </select>                                               
                        <script>
                            $('#ugyfel_id_select').prop('selectedIndex', -1)
                        </script>
                        @error('ugyfel_id_select') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">KötHat</label>
                        <select class="form-control shadow col-sm-6 col-md-6 col-lg-6 col-xl-6" id="kothat_id_select" wire:model="fkothat_id">
                            @foreach($kothatok0 as $kothat)
                                <option value={{ $kothat->id }}>{{ $kothat->hatarnap_id }}</option>
                            @endforeach
                        </select>                                               
                        <script>
                            $('#kothat_id_select').prop('selectedIndex', -1)
                        </script>
                        @error('kothat_id_select') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="pb-4">
                    @include('livewire.sablon.backSaveButton')
                </div>
            </form>
        </div>
    </div>
</div>