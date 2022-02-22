<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
               Felhasználók
            </div>
            @include('sablon.message')
            @include('sablon.createButton')
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-8">Id</th>
                        <th class="px-2 py-2 w-32">Név</th>
                        <th class="px-2 py-2 w-48">Ímél</th>
                        <th class="px-2 py-2">Jogosultság</th>
                        <th class="px-2 py-2 w-20">Aktív</th>
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($felhasznalok0 as $felhasznalo)
                    <tr>
                        <td class="border px-2 py-2">{{ $felhasznalo->id }}</td>
                        <td class="border px-2 py-2">{{ $felhasznalo->name }}</td>
                        <td class="border px-2 py-2">{{ $felhasznalo->email }}</td>
                        <td class="border px-2 py-2">{{ $felhasznalo->jogosultsag->jog_nev}}</td>
                        @include('sablon.aktivCella', ['param' => "$felhasznalo->active"])
                        <td class="border px-2 py-2">
                            <div class="col float-end">
                                @include('sablon.editButton', ['param' => "$felhasznalo->id"])
                                @include('sablon.deleteForm', ['param' => "route('felhasznalok.delete', ['felhasznalo' => $felhasznalo->id])"])
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="z-index: -1;">{{ $felhasznalok0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.felhasznalo.felhasznalo_create')
            @endif
        </div>
    </div>
</div>