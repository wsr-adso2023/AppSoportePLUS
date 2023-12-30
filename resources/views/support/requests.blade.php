@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Solicitudes de soporte técnico</label>
            <p class="">Listado de solicitudes de soporte técnico pendientes.</p>
        </div>
    </div> 
</div>

<x-container> 
    <x-col-md-12>
         <x-body-container>
            <livewire:diagnosticreports-datatable />
         </x-body-container>
    </x-col-md-12>
    </x-container> 
@endsection