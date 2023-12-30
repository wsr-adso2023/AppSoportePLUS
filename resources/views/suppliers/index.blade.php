@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Proveedores</label>
            <p class="">Listado de proveedores registrados en el sistema.</p>
        </div>
    </div> 
</div>

<x-container>
    <x-col-md-12>
        <x-body-container>
            @can('create-supplier')
                 <a href="{{ route('suppliers.create') }}" class="btn btn-primary btn-sm my-2">Nuevo</a>
            @endcan

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm my-2" data-bs-toggle="modal" data-bs-target="#supplierDestroy">
                Eliminar proveedor
           </button>

           <!-- Modal -->
          <div class="modal fade" id="supplierDestroy" tabindex="-1" aria-labelledby="supplierDestroyLabel" aria-hidden="true">
               <div class="modal-dialog">
                   <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="supplierDestroyLabel">Eliminar proveedor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('destroy-supplier') }}">
                               @csrf
                               <div class="row">
                                   <div class="col-md-6">
                                       <label for="idnumber">Número identificación:</label>
                                   </div>
                                   <div class="col-md-6">
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

            <livewire:supplier-datatable />
        </x-body-container>
    </x-col-md-12>
</x-container> 
@endsection