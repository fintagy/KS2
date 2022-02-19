<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 font-medium text-2xl">
               Ügyfelek
            </div>
            @include('sablon.message')
            @include('sablon.createButton')
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-8">Id</th>
                        <th class="px-2 py-2 w-20">Azonosító</th>
                        <th class="px-2 py-2">Leírás</th>
                        <th class="px-2 py-2 w-32">Adószám</th>
                        <th class="px-2 py-2 w-32">Közösségi adószám</th>
                        <th class="px-2 py-2 w-32">Csoport</th>
                        <th class="px-2 py-2 w-32">NAV csoport</th>
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ugyfelek0 as $ugyfel)
                    <tr>
                        <td class="border px-2 py-2">{{ $ugyfel->id }}</td>
                        <td class="border px-2 py-2">{{ $ugyfel->ugyf_azonosito }}</td>
                        <td class="border px-2 py-2">{{ $ugyfel->ugyf_leiras }}</td>
                        <td class="border px-2 py-2">{{ $ugyfel->ugyf_adoszam}}</td>
                        <td class="border px-2 py-2">{{ $ugyfel->ugyf_kadoszam}}</td>
                        <td class="border px-2 py-2">{{ $ugyfel->ucsoport->ucsop_nev}}</td>
                        <td class="border px-2 py-2">
                            @switch($ugyfel->ucsoport_id) 
                                @case (1)
                                    {{ $ugyfeltipuskod = $maganszemelyek0->where('ugyfel_id', $ugyfel->id)->firstOrFail()->msafa->msafa_kod }}
                                    @break
                                @case (2)
                                    {{ $ugyfeltipuskod = $egyenivallalkozok0->where('ugyfel_id', $ugyfel->id)->firstOrFail()->evafa->evafa_kod }}
                                    @break
                                @case (3)
                                    {{ $ugyfeltipuskod = $tarsasagok0->where('ugyfel_id', $ugyfel->id)->firstOrFail()->tafa->tafa_kod }}
                                    @break
                            @endswitch</td>
                        <td class="border px-2 py-2 w-auto" style="white-space:nowrap">
                            <div class="col float-end">
                                <a href="{{ route('gettszemelyek', $ugyfel) }}"
                                    class="btn btn-info btn-sm shadow-sm" 
                                    title="{{ __('messages.Persons') }}">
                                    <i class="fas fa-users"></i></a>
                                @include('sablon.editButton', ['param' => "$ugyfel->id"])
                                @include('sablon.deleteForm', ['param' => "route('ugyfelek.delete', ['ugyfel' => $ugyfel->id])"])
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="z-index: -1;">{{ $ugyfelek0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)              
                @include('livewire.ugyfel.ugyfel_create')                
            @endif 
        </div>
    </div>
</div>