<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
                Ímélcímek
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
                    @foreach($imelek0 as $imel)
                    <tr>
                        <td class="border px-2 py-2">{{ $imel->id }}</td>
                        <td class="border px-2 py-2">{{ $imel->kapcsolat_id }}</td>
                        <td class="border px-2 py-2">{{ $imel->imel_cim }}</td>
                        @include('sablon.aktivCella', ['param' => "$imel->imel_aktiv"])
                        <td class="border px-2 py-2">
                            <div class="col float-end">
                                @include('sablon.editButton', ['param' => "$imel->id"])
                                @include('sablon.deleteForm', ['param' => "route('imelek.delete', ['telefon'=>$telefon->id])"])
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="z-index: -1;">{{ $imelek0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.Kapcsolat.Imel_create')
            @endif
        </div>
    </div>
</div>