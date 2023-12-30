@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Clientes</label>
            <p class="">Listado de clientes registrados en el sistema.</p>
        </div>
    </div> 
</div>

<x-container>
    <x-col-md-12>
        <x-body-container>
            @can('create-customer')
                 <a href="{{ route('customers.create') }}" class="btn btn-primary btn-sm my-2">Nuevo</a>
            @endcan

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm my-2" data-bs-toggle="modal" data-bs-target="#customerModal">
                Eliminar cliente
           </button>

           <!-- Modal -->
          <div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="customerModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                   <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="customerModalLabel">Eliminar cliente</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('destroy-customer') }}">
                               @csrf
                               <div class="row">
                                   <div class="col-md-5">
                                       <label for="idnumber">Número identificación</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input type="text" id="idnumber" name="idnumber">
                                   </div>
                               </div>
                               <div class="row d-flex justify-content-center">
                                   <div class="col-md-5 mt-4">
                                       <button type="submit" class="btn btn-danger">Eliminar</button>
                                   </div>
                               </div>
                               
                               
                               
                           </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                   </div>
               </div>
           </div>

            <livewire:customer-datatable />
        </x-body-container>
    </x-col-md-12>
</x-container>
@endsection