<div class="row">
    <div class="col mb-4">
        @include('sablon.selectInput', ['param1' => "ft_tafa_id", 'param2' => "Áfacsoport", 'param3' => $tafak0, 'param4' => $tafa, 'param5' => "id", 'param6' => "tafa_leiras"])
        @include('sablon.errorSend', ['param' => "ft_tafa_id"])
    </div>
</div>
<div class="row">
    <div class="col mb-4">
        @include('sablon.textInput', ['param1' => "tars_cegnev", 'param2' => "Cég neve", 'param3' => "...cégnév"])
        @include('sablon.errorSend', ['param' => "tars_cegnev"])
    </div>
</div>
<div class="row">
    <div class="col mb-4">
        @include('sablon.textInput', ['param1' => "tars_cegjszam", 'param2' => "Cégjegyzék szám", 'param3' => "...cégjegyzék szám"])
        @include('sablon.errorSend', ['param' => "tars_cegjszam"])
    </div>
</div>