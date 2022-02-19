<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        @include('sablon.grayPanel')
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form class="bg-white sm:p-6 sm:pb-4">
                <div class="row">
                    <div class="col mb-4">
                        @include('sablon.selectInput', ['param1' => "fu_ucsoport_id", 'param2' => "Cégforma", 'param3' => $ucsoportok0, 'param4' => $ucsoport, 'param5' => "id", 'param6' => "ucsop_nev"])
                        @include('sablon.errorSend', ['param' => "fu_ucsoport_id"])
                    </div>
                    <div class="col mb-4">
                        @include('sablon.textInput', ['param1' => "ugyf_azonosito", 'param2' => "Azonosító", 'param3' => "...azonosító"])
                        @include('sablon.errorSend', ['param' => "ugyf_azonosito"])
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        @include('sablon.textInput', ['param1' => "ugyf_adoszam", 'param2' => "Adószám", 'param3' => "...adószám"])
                        @include('sablon.errorSend', ['param' => "ugyf_adoszam"])
                    </div>
                    <div class="col mb-4">
                        @include('sablon.textInput', ['param1' => "ugyf_kadoszam", 'param2' => "Közösségi adószám", 'param3' => "...közösségi adószám"])
                        @include('sablon.errorSend', ['param' => "ugyf_kadoszam"])
                    </div>
                </div> 
                <div class="row">
                    <div class="col mb-4">
                        @include('sablon.dateInput', ['param1' => "ugyf_alapitas", 'param2' => "Alapítás"])
                    </div>
                    <div class="col mb-4">
                        @include('sablon.checkBox', ['param1' => "ugyf_aktiv", 'param2' => "Aktív"])
                    </div>
                </div>
                @switch($this->fu_ucsoport_id)
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
                        @include('sablon.textTextarea', ['param1' => "ugyf_leiras", 'param2' => "Leírás", 'param3' => "...leírás"])
                        @include('sablon.errorSend', ['param' => 'ugyf_leiras'])
                    </div>
                </div>
                <div class="pb-4">
                    @include('sablon.backSaveButton')
                </div>
            </form>
        </div>
    </div>
</div>