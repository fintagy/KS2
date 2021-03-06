<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
               Bevallások
            </div>
            @include('sablon.message')
            @include('sablon.createButton')
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-8">Id</th>
                        <th class="px-2 py-2">Határnap</th>
                        <th class="px-2 py-2">Kötelezettség</th>
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kothatok0 as $kothat)
                    <tr>
                        <td class="border px-2 py-2">{{ $kothat->id }}</td>
                        <td class="border px-2 py-2">{{ $kothat->hatarnap->hatn_nap }}</td>
                        <td class="border px-2 py-2">{{ $kothat->kotelezettseg->kot_szam }}</td>
                        <td class="border px-2 py-2">
                            <div class="col float-end">
                                @include('sablon.editButton', ['param' => "$kothat->id"])
                                @include('sablon.deleteForm', ['param' => "route('kotelezettsegek.delete', ['kotelezettseg' => $kothat->id])"])
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="z-index: -1;">{{ $kothatok0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.Kotelezettseg.Kothat_create')
            @endif
        </div>
    </div>
</div>