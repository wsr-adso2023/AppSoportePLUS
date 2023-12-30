@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Detalles del usuario</label>
            <p class=""></p>
        </div>
        <div class="col d-flex justify-content-md-end align-items-center">
            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm my-2"><span class="bi bi-reply"></span>Regresar</a>
        </div>
    </div> 
</div>

<div class="container bg-light">
    <div class="row">
        <div class="col mb-4 mt-4">
            <div class="row mb-3">
                <div class="input-group">
                    <span for="name" class="input-group-text">Nombres</span>
                    <input type="text" class="form-control" value=" {{ $user->name }}" Readonly>
                </div>
            </div>
               
            <div class="row mt-4">
                 <div class="input-group">
                    <span for="name" class="input-group-text">Tipo de documento</span>
                    <input type="text" class="form-control" value=" {{ $user->documentype }}" Readonly>
                 </div>
            </div>

            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Teléfono</span>
                    <input type="text" class="form-control" value=" {{ $user->phone }}" Readonly>
                </div>
            </div>

            <div class="row mt-4">
                 <div class="input-group">
                    <span for="name" class="input-group-text">Fecha de nacimiento</span>
                    <input type="text" class="form-control" value=" {{ $user->birthdate }}" Readonly>
                 </div>
         </div>
    </div>
        <div class="col mb-4">
                <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Apellidos</span>
                        <input type="text" class="form-control" value=" {{ $user->lastname }}" Readonly>
                     </div>
                </div>

                <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Número de documento</span>
                        <input type="text" class="form-control" value=" {{ $user->idnumber }}" Readonly>
                     </div>
                </div>

               <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Correo electrónico</span>
                        <input type="text" class="form-control" value=" {{ $user->email }}" Readonly>
                    </div>
               </div>
        </div>
    </div>
</div>

<div class="container bg-light mt-4">
    <div class="col-md-4">
        <div class="row">
            <div class="input-group mt-4">
                <span for="name" class="input-group-text">Nombre de usuario</span>
                <input type="text" class="form-control" value=" {{ $user->username }}" Readonly>
            </div>
        </div>
    
        <div class="row mt-4">
            <div class="input-group mb-4">
                    <span for="name" class="input-group-text">Rol asignado</span>
                        @forelse ($user->getRoleNames() as $role)
                            <input type="text" class="form-control" value="{{ $role }}" Readonly>
                        @empty
                        @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
