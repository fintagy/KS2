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
                        <label for="uszem_vezeteknev_input" class="block text-gray-700 text-sm font-bold mb-2">Vezetéknév</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="szem_vezeteknev_input" wire:model="szem_vezeteknev"
                            placeholder="...vezetéknév">
                    </div>
                    <div class="col mb-4">
                        <label for="szem_keresztnev_input" class="block text-gray-700 text-sm font-bold mb-2">Keresztnév</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="szem_keresztnev_input" wire:model="szem_keresztnev"
                            placeholder="...keresztnév">
                        @error('szem_keresztnev') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col mb-4">
                        <label for="szem_beosztas_input" class="block text-gray-700 text-sm font-bold mb-2">Beosztás</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="szem_beosztas_input" wire:model="szem_beosztas"
                            placeholder="...beosztás">
                        @error('szem_beosztas') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>     
                    <div class="col mb-4">
                        <label for="szem_aktiv_input" class="block text-gray-700 text-sm font-bold mb-2">Aktív</label>
                        <input type="checkbox" id="szem_aktiv_input" value="{{$this->szem_aktiv}}" wire:model="szem_aktiv" >
                        @error('szem_aktiv') <span class="text-red-500">{{ $message }}</span>@enderror
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