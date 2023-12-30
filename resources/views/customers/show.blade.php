@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Informacion del usuario: {{ $customer->name }} </label>
            <p class=""></p>
        </div>
        <div class="col d-flex justify-content-md-end align-items-center">
            <a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm my-2"><span class="bi bi-reply"></span>Regresar</a>
        </div>
    </div> 
</div>
<div class="container bg-light">
    <div class="row">
        <div class="col mb-4 mt-4">
            <div class="row mb-3">
                <div class="input-group">
                    <span for="name" class="input-group-text">Nombres</span>
                    <input type="text" class="form-control" value=" {{ $customer->name }}" Readonly>
                </div>
            </div>
               
            <div class="row mt-4">
                 <div class="input-group">
                    <span for="name" class="input-group-text">Tipo de documento</span>
                    <input type="text" class="form-control" value=" {{ $customer->documentype }}" Readonly>
                 </div>
            </div>

            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Telefono</span>
                    <input type="text" class="form-control" value=" {{ $customer->phone }}" Readonly>
                </div>
            </div>

            <div class="row mt-4">
                 <div class="input-group">
                    <span for="name" class="input-group-text">Fecha de nacimiento</span>
                    <input type="text" class="form-control" value=" {{ $customer->birthdate }}" Readonly>
                 </div>
         </div>
    </div>
        <div class="col mb-4">
                <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Apellidos</span>
                        <input type="text" class="form-control" value=" {{ $customer->lastname }}" Readonly>
                     </div>
                </div>

                <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Numero de documento</span>
                        <input type="text" class="form-control" value=" {{ $customer->idnumber }}" Readonly>
                     </div>
                </div>

               <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Correo electronico</span>
                        <input type="text" class="form-control" value=" {{ $customer->email }}" Readonly>
                    </div>
               </div>

               <div class="row">
                <div class="input-group mt-4">
                    <span for="name" class="input-group-text">Fecha de ingreso</span>
                    <input type="text" class="form-control" value=" {{ $customer->datentry }}" Readonly>
                </div>
            </div>
    
            <div class="row">
                <div class="input-group mt-4">
                    <span for="address" class="input-group-text">Direccion</span>
                    <input type="text" class="form-control" value=" {{ $customer->address }}" Readonly>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
