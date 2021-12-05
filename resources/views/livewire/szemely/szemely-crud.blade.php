<div class="py-12">
<!-- link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" -->
       
<link rel="stylesheet" type="text/css" href="{{ url('/css/1app.css') }}">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 pb-2 shadow-lg my-2" role="alert">
                <div class="flex">
                    <div class="text-md-start">{{ session('message') }}</div>
                </div>
            </div>
            @endif            
            <button wire:click="create()" 
                class="btn btn-primary float-end btn-sm shadow-sm" 
                title="{{ __('messages.New') }}">
                <i class="fas fa-plus"></i>
            </button>
            @if(isset($isModalOpen) && $isModalOpen)
                @include('livewire.szemely.szemely_create')
            @endif
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="ps-2 text-center">Id</th>
                        <th class="ps-2 py-2">Vezetéknév</th>
                        <th class="ps-2 py-2">Kersztnév</th>
                        <th class="ps-2 py-2">Beosztás</th>                        
                        <th class="ps-2 text-end">Parancsok</th>
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
        </div>        
    </div>
</div>