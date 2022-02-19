<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        @include('sablon.grayPanel')
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form class="bg-white sm:p-6 sm:pb-4">
                <div class="row">
                    <div class="col mb-4">
                        @include('sablon.selectInput', ['param1' => "fugyfel_id", 'param2' => "Ügyfél", 'param3' => $ugyfelek0, 'param4' => $ugyfel, 'param5' => "id", 'param6' => "ugyf_adoszam"])
                        @include('sablon.errorSend', ['param' => "fugyfel_id"])
                    </div>
                    <div class="col mb-4">
                        @include('sablon.selectInput', ['param1' => "fkothat_id", 'param2' => "KötHat", 'param3' => $kothatok0, 'param4' => $kothat, 'param5' => "id", 'param6' => "hatarnap_id"])
                        @include('sablon.errorSend', ['param' => "fkothat_id"])
                    </div>
                </div>
                <div class="pb-4">
                    @include('sablon.backSaveButton')
                </div>
            </form>
        </div>
    </div>
</div>