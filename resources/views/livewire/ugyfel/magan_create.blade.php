<div class="row">
    <div class="col mb-4">
        @include('sablon.selectInput', ['param1' => "fm_msafa_id", 'param2' => "Áfacsoport", 'param3' => $msafak0, 'param4' => $msafa, 'param5' => "id", 'param6' => "msafa_leiras"])
        @include('sablon.errorSend', ['param' => "fm_msafa_id"])
    </div>
</div>
<div class="row">
    <div class="col mb-4">
        @include('sablon.textInput', ['param1' => "ms_adoazonosito", 'param2' => "Adóazonosító", 'param3' => "...adóazonosító"])
        @include('sablon.errorSend', ['param' => "ms_adoazonosito"])
    </div>
    <div class="col mb-4">
        @include('sablon.textInput', ['param1' => "ms_tajszam", 'param2' => "TAJ szám", 'param3' => "...TAJ szám"])
        @include('sablon.errorSend', ['param' => "ms_tajszam"])
    </div>
</div> 
<div class="row">
    <div class="col mb-4">
        @include('sablon.textInput', ['param1' => "ms_szulhely", 'param2' => "Születési hely", 'param3' => "...születési hely"])
        @include('sablon.errorSend', ['param' => "ms_szulhely"])
    </div>
    <div class="col mb-4">
        @include('sablon.dateInput', ['param1' => "ms_szulido", 'param2' => "Születési idő"])
    </div>
</div>
<div class="row">
    <div class="col mb-4">
        @include('sablon.textInput', ['param1' => "ms_aneve", 'param2' => "Anyja neve", 'param3' => "...Anyja neve"])
        @include('sablon.errorSend', ['param' => "ms_aneve"])
    </div>
    <div class="col mb-4">
        @include('sablon.textInput', ['param1' => "ms_szigszam", 'param2' => "Személyi igazolvány száma", 'param3' => "...szig. szám"])
        @include('sablon.errorSend', ['param' => "ms_szigszam"])
    </div>
</div>