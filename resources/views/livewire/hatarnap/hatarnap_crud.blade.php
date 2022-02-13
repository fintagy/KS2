<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <div class="text-gray-500 text-sm leading-4 font-medium text-2xl">
               Határnapok
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
                        <th class="px-2 py-2">Határnap</th>    
                        <th class="px-2 py-2 w-20">Aktív</th>                    
                        <!-- th class="px-2 py-2 w-48">Létrehozás</th>                        
                        <th class="px-2 py-2 w-48">Módostás</th -->
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hatarnapok0 as $hatarnap)
                    <tr>
                        <td class="border px-2 py-2">{{ $hatarnap->id }}</td>
                        <td class="border px-2 py-2">{{ $hatarnap->hatn_nap }}</td>
                        <td class="border px-2 py-2 d-none d-md-table-cell">
                            @if ($hatarnap->hatn_aktiv == 1 )
                                Aktív
                            @else
                                Törölt
                            @endif
                        </td> 
                        <!-- td class="border px-2 py-2">{{ $hatarnap->esem_letrehozas }}</td>
                        <td class="border px-2 py-2">{{ $hatarnap->esem_mod}}</td -->                        
                        <td class="border px-2 py-2">
                            <div class="col float-end">                                
                                <button type="button" wire:click="edit({{ $hatarnap->id }})" 
                                    class="btn btn-info btn-sm shadow-sm" 
                                    title="{{ __('messages.Edit') }}">
                                    <i class="fas fa-eye"></i>
                                </button>                                
                                <form method="POST" 
                                    action="{{ route('hatarnapok.destroy', $hatarnap) }}"
                                    class="form d-inline-block" 
                                    title="Delete">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" 
                                        class="btn btn-danger btn-sm shadow-sm" 
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
            <div style="z-index: -1;">{{ $hatarnapok0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.hatarnap.hatarnap_create')
            @endif
        </div>        
    </div>
</div>