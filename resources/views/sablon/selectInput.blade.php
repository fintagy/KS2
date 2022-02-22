<label class="block text-gray-700 text-sm font-bold mb-2">{{ $param2 }}</label>
<select class="form-control shadow col-sm-6 col-md-6 col-lg-6 col-xl-6" id="{{ $param1 }}_select" wire:model="{{ $param1 }}">
    @foreach($param3 as $param4)
        <option value= {{ $param4->$param5 }}>{{ $param4->$param6 }}</option>
    @endforeach
</select>
@if(isset($this->ujRecord) && $this->ujRecord)
    <script>
        $('#{{ $param1 }}_select').prop('selectedIndex', -1)
    </script>
@endif