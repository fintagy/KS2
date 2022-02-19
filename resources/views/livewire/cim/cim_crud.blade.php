<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
               Címek
            </div>
            @include('sablon.message')
            @include('sablon.createButton')
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-8">Id</th>
                        <th class="px-2 py-2 w-32">Használó</th>
                        <th class="px-2 py-2 w-48">Cím</th>
                        <th class="px-2 py-2 w-20">Aktív</th>
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cimek0 as $cim)
                    <tr>
                        <td class="border px-2 py-2">{{ $cim->id }}</td>
                        <td class="border px-2 py-2">{{ $cim->kapcsolat_id }}</td>
                        <td class="border px-2 py-2">{{ $cim->cim_cime }}</td>
                        @include('sablon.aktivCella', ['param' => "$cim->cim_aktiv"])
                        <td class="border px-2 py-2">
                            <div class="col float-end">
                                @include('sablon.editButton', ['param' => "$cim->id"])
                                @include('sablon.deleteForm', ['param' => "route('cimek.delete', ['cim'=>$cim->id])"])
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="z-index: -1;">{{ $cimek0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.cim.cim_create')
            @endif
        </div>        
    </div>
</div>