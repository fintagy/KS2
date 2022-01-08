<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
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
                        <th class="px-2 py-2 w-4">Id</th>
                        <th class="ps-2 py-2 w-32">Vezetéknév</th>
                        <th class="ps-2 py-2 w-32">Kersztnév</th>
                        <th class="ps-2 py-2">Beosztás</th>                        
                        <th class="px-2 py-2 w-32">Parancsok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($szemelyek0 as $szemely)
                    <tr>
                        <td class="border ps-2 py-2">{{ $szemely->id }}</td>
                        <td class="border ps-2 py-2">{{ $szemely->szem_vezeteknev }}</td>
                        <td class="border ps-2 py-2">{{ $szemely->szem_keresztnev }}</td>
                        <td class="border ps-2 py-2">{{ $szemely->szem_beosztas}}</td>                        
                        <td class="border pe-2 py-2">
                            <div class="col float-end">                             
                                <button type="button" wire:click="edit({{ $szemely->id }})" 
                                    class="btn btn-info btn-sm shadow-sm" 
                                    title="{{ __('messages.Contacts') }}">
                                    <i class="fas fa-address-card"></i>
                                </button>
                                <button type="button" wire:click="edit({{ $szemely->id }})" 
                                    class="btn btn-info btn-sm shadow-sm" 
                                    title="{{ __('messages.Edit') }}">
                                    <i class="fas fa-eye"></i>
                                </button>                                
                                <form method="POST" 
                                    action="{{ route('szemelyek.destroy', $szemely) }}"
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
            <div style="z-index: -1;">{{ $szemelyek0->links()}}</div>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.szemely.szemely_create')
            @endif
        </div>        
    </div>
</div>