<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        @include('livewire.sablon.grayPanel')
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form class="bg-white sm:p-6 sm:pb-4">
                <div class="row">                   
                    <div class="col mb-4">
                        @include('livewire.sablon.textInput', ['param1' => "name", 'param2' => "Név", 'param3' => "...teljes név"])
                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col mb-4">
                        @include('livewire.sablon.textInput', ['param1' => "imel", 'param2' => "Ímél", 'param3' => "...ímélcím"])
                        @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col mb-4">
                        <label for="jogosultsag_input" class="block text-gray-700 text-sm font-bold mb-2">Jogosultság</label>
                        <select class="form-control shadow col-sm-6 col-md-6 col-lg-6 col-xl-6" id="jogosultsag_select" wire:model="fjogosultsag_id">
                            @foreach($jogosultsagok0 as $jogosultsag)
                                <option value={{ $jogosultsag->id }}>{{ $jogosultsag->jog_nev }}</option>
                            @endforeach
                        </select>                                               
                        <script>
                            $('#jogosultsag_select').prop('selectedIndex', -1)
                        </script>
                        @error('jogosultsag_select') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>     
                    <div class="col mb-4">
                        @include('livewire.sablon.checkBox', ['param1' => "active", 'param2' => "Aktív"])
                    </div> 
                </div>
                <div class="pb-4">
                    @include('livewire.sablon.backSaveButton')
                </div>
            </form>
        </div>
    </div>
</div>