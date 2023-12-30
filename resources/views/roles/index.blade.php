@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Roles</label>
            <p class="">Listado de roles para asignar en el sistema.</p>
        </div>
    </div> 
</div>

<x-container>
    <x-col-md-12>
        <x-body-container>
            <livewire:role-datatable />
        </x-body-container>
    </x-col-md-12>
</x-container> 

<script>
    const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>
@endsection