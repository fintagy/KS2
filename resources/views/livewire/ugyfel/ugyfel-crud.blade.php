@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ url('/css/1app.css') }}" />
@section('content')
<div class="py-12">
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
            @if(isset($isModalOpen) && ($isModalOpen))              
                @include('livewire.ugyfel.ugyfel_create')                
            @endif            
            <table class="table-fixed w-full pb-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="ps-2 text-center">Id</th>
                        <th class="ps-2 py-2">Azonosító</th>
                        <th class="ps-2 py-2">Leírás</th>
                        <th class="ps-2 py-2">Adószám</th>
                        <th class="ps-2 py-2">Közösségi adószám</th>
                        <th class="ps-2 py-2">Csoport</th>
                        <th class="ps-2 text-end">Parancsok</th>
                    </tr>
                </thead>
                <tbody>                    
                    @foreach($ugyfelek0 as $ugyfel)
                    <tr>
                        <td class="border ps-2 py-2">{{ $ugyfel->id }}</td>
                        <td class="border ps-2 py-2">{{ $ugyfel->ugyf_azonosito }}</td>
                        <td class="border ps-2 py-2">{{ $ugyfel->ugyf_leiras }}</td>
                        <td class="border ps-2 py-2">{{ $ugyfel->ugyf_adoszam}}</td>
                        <td class="border ps-2 py-2">{{ $ugyfel->ugyf_kadoszam}}</td>
                        <td class="border ps-2 py-2">{{ $ugyfel->ucsoport->ucsop_nev}}</td>
                        <td class="border pe-2 py-2">
                            <div class="col float-end">
                                <button type="button" wire:click="edit({{ $ugyfel->id }})" 
                                    class="btn btn-info btn-sm shadow-sm" 
                                    title="{{ __('messages.Contacts') }}">
                                    <i class="far fa-address-card"></i></button>
                                <!-- button type="button" wire:click="getszemelyek({{ $ugyfel }})" 
                                    class="btn btn-info btn-sm shadow-sm" title="{{ __('messages.Persons') }}"><i 
                                    class="fas fa-users"></i></button -->
                                <a href="{{ route('ugyfelek.getszemelyek', $ugyfel) }}"
                                    class="btn btn-info btn-sm shadow-sm" 
                                    title="{{ __('messages.Persons') }}">
                                    <i class="fas fa-users"></i></a>
                                <button type="button" wire:click="edit({{ $ugyfel->id }})" 
                                    class="btn btn-info btn-sm shadow-sm" 
                                    title="{{ __('messages.Edit') }}">
                                    <i class="far fa-eye"></i></button>
                                <!--button wire:click.prevent="delete({{$ugyfel->id}})" 
                                    class="btn btn-danger" title="{{ __('messages.Delete') }}"><i 
                                    class="fa fa-trash" aria-hidden="true"></i></button -->
                                <form method="POST" 
                                    action="{{ route('ugyfelek.destroy', $ugyfel) }}" 
                                    class="form d-inline-block" title="Delete">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm shadow-sm" 
                                        title="{{ __('messages.Delete') }}" 
                                        onclick="return confirm('Biztos törölni akarja?')" >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>                
            </table>
            <div style="z-index: -1;">{{ $ugyfelek0->links()}}</div>
        </div>        
    </div>
</div>
@endsection