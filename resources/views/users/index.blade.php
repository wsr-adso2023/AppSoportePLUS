@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Usuarios</label>
            <p class="">Listado de usuarios registrados en el sistema.</p>
        </div>
    </div> 
</div>

<x-container>
    <x-col-md-12>
        <x-body-container>
            @can('create-user')
                 <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm my-2">Nuevo</a>
            @endcan

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm my-2" data-bs-toggle="modal" data-bs-target="#userModal">
                 Eliminar usuario
            </button>

            <!-- Modal -->
           <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="userModalLabel">Eliminar usuario</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                             <form method="POST" action="{{ route('destroy-user') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="idnumber">Número identificación:</label>
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

            <livewire:user-datatable />
        </x-body-container>
    </x-col-md-12>
</x-container>  
@endsection
