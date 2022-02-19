<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
               Kötelezettségek
            </div>
            @include('sablon.message')
            @include('sablon.createButton')
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-8">Id</th>
                        <th class="px-2 py-2 w-8">kottip_id</th>
                        <th class="px-2 py-2">Leírás</th>
                        <th class="px-2 py-2 w-20">Azonosító</th>
                        <th class="px-2 py-2 w-32">Kié</th>                        
                        <th class="px-2 py-2 w-20">Aktív</th>
                        <!-- th class="px-2 py-2 w-32">Létrehozás</th>                        
                        <th class="px-2 py-2 w-32">Módosítás</th -->
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kotelezettsegek0 as $kotelezettseg)
                    <tr>
                        <td class="border px-2 py-2">{{ $kotelezettseg->id }}</td>
                        <td class="border px-2 py-2">{{ $kotelezettseg->kottip_id }}</td>
                        <td class="border px-2 py-2">{{ $kotelezettseg->kot_leiras }}</td>
                        <td class="border px-2 py-2">{{ $kotelezettseg->kot_szam }}</td>
                        <td class="border px-2 py-2">{{ $kotelezettseg->kot_kie }}</td>
                        @include('sablon.aktivCella', ['param' => "$kotelezettseg->kot_aktiv"])
                        <td class="border px-2 py-2">
                            <div class="col float-end">
                                @include('sablon.editButton', ['param' => "$kotelezettseg->id"])
                                @include('sablon.deleteForm', ['param' => "route('kotelezettsegek.delete', ['kotelezettseg' => $kotelezettseg->id])"])
                            </div>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>                
            </table>
            <div style="z-index: -1;">{{ $kotelezettsegek0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.kotelezettseg.kotelezettseg_create')
            @endif
        </div>        
    </div>
</div>