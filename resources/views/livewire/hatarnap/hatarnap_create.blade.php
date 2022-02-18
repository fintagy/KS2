<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        @include('livewire.sablon.grayPanel')
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form class="bg-white sm:p-6 sm:pb-4">
                <div class="row">
                    <div class="col-6 mb-4">
                        @include('livewire.sablon.dateInput', ['param1' => "hatarnap", 'param2' => "Határnap", 'param3' => "hatn_nap"])
                    </div>
                    <div class="col-6 mb-4 center">
                        @include('livewire.sablon.checkBox', ['param1' => "hatn_aktiv", 'param2' => "Aktív"])
                    </div>
                </div>
                <div class="pb-4">
                    @include('livewire.sablon.backSaveButton')
                </div>
            </form>
        </div>
    </div>
</div>