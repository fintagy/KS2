<label class="block text-gray-700 text-sm font-bold mb-2">{{ $param2 }}</label>
<input type="datetime-local"
    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
    id="{{ $param1 }}_input" 
    wire:model="{{ $param1 }}"