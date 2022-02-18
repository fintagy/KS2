<label id="{{ $param1 }}_select" class="block text-gray-700 text-sm font-bold mb-2">{{ $param2 }}</label>
<select class="form-control shadow col-sm-6 col-md-6 col-lg-6 col-xl-6" id="{{ $param1 }}_select" wire:model="{{ $param3 }}">
    @foreach($param4 as $param5)
        <option value= {{ $param6 }}>{{ $param7 }}</option>
    @endforeach
</select>
<script>
    $('#{{ $param1 }}_select').prop('selectedIndex', -1)
</script>

//egyelőre nem tudtam adaptálni...