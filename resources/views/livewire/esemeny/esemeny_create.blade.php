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
                        <label for="azonosito_input" class="block text-gray-700 text-sm font-bold mb-2">Azonosító</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="azonosito_input" wire:model="esemeny_id"
                            placeholder="...belső azon.">
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
                    <button wire:click="closeModalPopover()" type="button" class="btn btn-secondary btn-sm shadow-sm" title="{{ __('messages.Back') }}"><i class="fas fa-arrow-left"></i></button>
                    <button wire:click.prevent="store()" type="button" class="btn btn-success btn-sm shadow-sm" title="{{ __('messages.Save') }}"><i class="fas fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>