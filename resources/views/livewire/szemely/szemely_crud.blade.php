<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
               Személyek
            </div>
            @include('livewire.sablon.message')
            @include('livewire.sablon.createButton')
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-8">Id</th>
                        <th class="px-2 py-2 w-32">Vezetéknév</th>
                        <th class="px-2 py-2 w-32">Keresztnév</th>
                        <th class="px-2 py-2">Beosztás</th>
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($szemelyek0 as $szemely)
                    <tr>
                        <td class="border px-2 py-2">{{ $szemely->id }}</td>
                        <td class="border px-2 py-2">{{ $szemely->szem_vezeteknev }}</td>
                        <td class="border px-2 py-2">{{ $szemely->szem_keresztnev }}</td>
                        <td class="border px-2 py-2">{{ $szemely->szem_beosztas}}</td>                        
                        <td class="border px-2 py-2">
                            <div class="col float-end">
                                @include('livewire.sablon.editButton', ['param' => "$szemely->id"])
                                @include('livewire.sablon.deleteForm', ['param' => "route('szemelyek.destroy', $szemely)"])
                            </div>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>                
            </table>
            <div style="z-index: -1;">{{ $szemelyek0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.szemely.szemely_create')
            @endif
        </div>        
    </div>
</div>