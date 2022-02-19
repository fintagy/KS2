<div class="row">
    <div class="col mb-4">
        @include('sablon.selectInput', ['param1' => "fe_evafa_id", 'param2' => "Áfacsoport", 'param3' => $evafak0, 'param4' => $evafa, 'param5' => "id", 'param6' => "evafa_leiras"])
        @include('sablon.errorSend', ['param' => "fe_evafa_id"])
    </div>
</div>
<div class="row">
    <div class="col mb-4">
        @include('sablon.textInput', ['param1' => "ev_okmnyszam", 'param2' => "Nyilvántartási szám", 'param3' => "...nyilvántartási szám"])
        @include('sablon.errorSend', ['param' => "ev_okmnyszam"])
    </div>
    <div class="col mb-4">
        @include('sablon.textInput', ['param1' => "ev_statszam", 'param2' => "Statisztikai számjel", 'param3' => "...stat. szám"])
        @include('sablon.errorSend', ['param' => "ev_statszam"])
    </div>
</div> 
<div class="row">
    <div class="col mb-4">
        @include('sablon.textInput', ['param1' => "ev_nev", 'param2' => "Név", 'param3' => "...név"])
        @include('sablon.errorSend', ['param' => "ev_nev"])
    </div>
</div>