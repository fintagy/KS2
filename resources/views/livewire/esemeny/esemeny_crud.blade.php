<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
               Események
            </div>
            @include('sablon.message')
            @include('sablon.createButton')
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-8">Id</th>
                        <th class="px-2 py-2 w-16">ugyfel_id</th>
                        <th class="px-2 py-2">kothat_id</th>
                        <th class="px-2 py-2 w-48">Létrehozás</th>                        
                        <th class="px-2 py-2 w-48">Módosítás</th>
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($esemenyek0 as $esemeny)
                    <tr>
                        <td class="border px-2 py-2">{{ $esemeny->id }}</td>
                        <td class="border px-2 py-2">{{ $esemeny->ugyfel_id }}</td>
                        <td class="border px-2 py-2">{{ $esemeny->kothat_id }}</td>
                        <td class="border px-2 py-2">{{ $esemeny->esem_letrehozas }}</td>
                        <td class="border px-2 py-2">{{ $esemeny->esem_mod}}</td>                        
                        <td class="border px-2 py-2">
                            <div class="col float-end">
                                @include('sablon.editButton', ['param' => "$esemeny->id"])
                                @include('sablon.deleteForm', ['param' => "route('esemenyek.delete',['esemeny' => $esemeny->id])"])
                            </div>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>                
            </table>
            <div style="z-index: -1;">{{ $esemenyek0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.esemeny.esemeny_create')
            @endif
        </div>        
    </div>
</div>