@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Solicitudes de soporte técnico</label>
            <p class="">Listado de solicitudes de soporte técnico.</p>
        </div>
    </div> 
</div>

<x-container> 
<x-col-md-12>
     <x-body-container>
             @can('create-support')
                 <a href="{{ route('support.create') }}" class="btn btn-primary btn-sm my-2">Nuevo</a>
             @endcan

        <livewire:solicitudes-datatable />
     </x-body-container>
</x-col-md-12>
</x-container>  

@endsection