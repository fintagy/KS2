<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
               Ügyfél típusok
            </div>
            @include('sablon.message')
            @include('sablon.createButton')
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-8">Id</th>
                        <th class="px-2 py-2">Csoportnév</th>
                        <th class="px-2 py-2 w-48">Létrehozás</th>
                        <th class="px-2 py-2 w-48">Módosítás</th>
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ucsoportok0 as $ucsoport)
                    <tr>
                        <td class="border px-2 py-2">{{ $ucsoport->id }}</td>
                        <td class="border px-2 py-2">{{ $ucsoport->ucsop_nev }}</td>
                        <td class="border px-2 py-2">{{ $ucsoport->ucsop_letrehozas }}</td>
                        <td class="border px-2 py-2">{{ $ucsoport->ucsop_mod}}</td>
                        <td class="border px-2 py-2">
                            <div class="col float-end">
                                @include('sablon.editButton', ['param' => "$ucsoport->id"])
                                @include('sablon.deleteForm', ['param' => "route('ucsoportok.delete', ['ucsoport' => $ucsoport->id])"])
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="z-index: -1;">{{ $ucsoportok0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.ugyfel.ucsoport_create')
            @endif
        </div>
    </div>
</div>