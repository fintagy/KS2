<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
               Határidők
            </div>
            @include('livewire.sablon.message')
            @include('livewire.sablon.createButton')
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-8">Id</th>
                        <th class="px-2 py-2">Határnap</th>
                        <th class="px-2 py-2 w-20">Aktív</th>
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hatarnapok0 as $hatarnap)
                    <tr>
                        <td class="border px-2 py-2">{{ $hatarnap->id }}</td>
                        <td class="border px-2 py-2">{{ $hatarnap->hatn_nap }}</td>
                        @include('livewire.sablon.aktivCella', ['param' => "$hatarnap->hatn_aktiv"])
                        <td class="border px-2 py-2">
                            <div class="col float-end">
                                @include('livewire.sablon.editButton', ['param' => "$hatarnap->id"])
                                @include('livewire.sablon.deleteForm', ['param' => "route('hatarnapok.destroy', $hatarnap)"])
                            </div>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>                
            </table>
            <div style="z-index: -1;">{{ $hatarnapok0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.hatarnap.hatarnap_create')
            @endif
        </div>        
    </div>
</div>