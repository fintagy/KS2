<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="text-gray-500 text-sm leading-4 font-medium text-2xl">
               Ügyfelek
            </div>
            @if (session()->has('message'))
            <div class="toast" id="myToast">
                <div class="toast-header">
                    <strong class="me-auto"><i class="bi-gift-fill">{{ session('message') }}</i></strong>                   
                </div>               
            </div>
            <script>
            $(document).ready(function(){
                $("#myToast").toast({                    
                    delay: 3000
                });
                $("#myToast").toast("show");
            });
            </script>
            @endif
            <button wire:click="create()" 
                class="btn btn-primary float-end btn-sm shadow-sm" 
                title="{{ __('messages.New') }}">
                <i class="fas fa-plus"></i>
            </button>                             
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
                                <button type="button" wire:click="edit({{ $ugyfel->id }})" 
                                    class="btn btn-info btn-sm shadow-sm" 
                                    title="{{ __('messages.Edit') }}">
                                    <i class="fas fa-eye"></i>
                                </button>                                
                                <form method="POST" 
                                    action="{{ route('ugyfelek.destroy', $ugyfel) }}" 
                                    class="form d-inline-block" title="Delete">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm shadow-sm" 
                                        title="{{ __('messages.Delete') }}" 
                                        onclick="return confirm('Biztos törölni akarja?')" >
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
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