<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form class="bg-white sm:p-6 sm:pb-4">
                <div class="row">                   
                    <div class="col-6 mb-4">
                        <label for="hatarnap_input" class="block text-gray-700 text-sm font-bold mb-2">Határnap</label>                        
                        <input type="datetime-local"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="hatarnap_input" wire:model="hatn_nap" max="<?= date('Y-m-d'); ?>" value="{{$this->hatn_nap}}"  >                        
                    </div>       
                    <div class="col-6 mb-4 center">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Aktív</label>
                        <input type="checkbox" value="{{$this->hatn_aktiv}}" wire:model="hatn_aktiv" >                       
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