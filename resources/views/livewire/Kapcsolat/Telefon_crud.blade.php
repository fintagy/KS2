<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
               Telefonszámok
            </div>
            @include('sablon.message')
            @include('sablon.createButton')
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-8">Id</th>
                        <th class="px-2 py-2 w-32">Használó</th>
                        <th class="px-2 py-2">Szám</th>
                        <th class="px-2 py-2 w-20">Aktív</th>
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($telefonok0 as $telefon)
                    <tr>
                        <td class="border px-2 py-2">{{ $telefon->id }}</td>
                        <td class="border px-2 py-2">{{ $telefon->kapcsolat_id }}</td>
                        <td class="border px-2 py-2">{{ $telefon->tel_szam }}</td>
                        @include('sablon.aktivCella', ['param' => "$telefon->tel_aktiv"])
                        <td class="border px-2 py-2">
                            <div class="col float-end">
                                @include('sablon.editButton', ['param' => "$telefon->id"])
                                @include('sablon.deleteForm', ['param' => "route('telefonok.delete', ['telefon'=>$telefon->id])"])
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="z-index: -1;">{{ $telefonok0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.Kapcsolat.Telefon_create')
            @endif
        </div>
    </div>
</div>