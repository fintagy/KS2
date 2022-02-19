<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        @include('sablon.grayPanel')
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form class="bg-white sm:p-6 sm:pb-4">
                <div class="row">
                    <div class="col mb-4">
                        @include('sablon.textTextarea', ['param1' => "kot_leiras", 'param2' => "Leírás", 'param3' => "...leírás"])
                        @include('sablon.errorSend', ['param' => 'kot_leiras'])
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        @include('sablon.textInput', ['param1' => "kot_szam", 'param2' => "Azonosító", 'param3' => "...név"])
                        @include('sablon.errorSend', ['param' => 'kot_szam'])
                    </div>
                    <div class="col mb-4">
                        @include('sablon.textInput', ['param1' => "kot_kie", 'param2' => "Kié", 'param3' => "...beosztás"])
                        @include('sablon.errorSend', ['param' => 'kot_kie'])
                    </div>
                    <div class="col mb-4">
                        @include('sablon.checkBox', ['param1' => "kot_aktiv", 'param2' => "Aktív"])
                    </div>
                </div>
                <div class="pb-4">
                    @include('sablon.backSaveButton')
                </div>
            </form>
        </div>
    </div>
</div>