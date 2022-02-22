<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        @include('sablon.grayPanel')
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form class="bg-white sm:p-6 sm:pb-4">
                <div class="row">
                    <div class="col mb-4">
                        @include('sablon.textInput', ['param1' => "name", 'param2' => "Név", 'param3' => "...teljes név"])
                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col mb-4">
                        @include('sablon.textInput', ['param1' => "email", 'param2' => "Ímél", 'param3' => "...ímélcím"])
                        @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        @include('sablon.selectInput', ['param1' => "ff_jogosultsag_id", 'param2' => "Jogosultság", 'param3' => $jogosultsagok0, 'param4' => $jogosultsag, 'param5' => "id", 'param6' => "jog_nev"])
                        @include('sablon.errorSend', ['param' => "ff_jogosultsag_id"])
                    </div>
                    <div class="col mb-4">
                        @include('sablon.checkBox', ['param1' => "active", 'param2' => "Aktív"])
                    </div>
                </div>
                <div class="pb-4">
                    @include('sablon.backSaveButton')
                </div>
            </form>
        </div>
    </div>
</div>