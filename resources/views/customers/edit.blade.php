@extends('layouts.app')

@section('content')


<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Modificar datos del cliente</label>
            <p class="">Por favor, proceda con la actualización de la información necesaria.</p>
        </div>
        <div class="col d-flex justify-content-md-end align-items-center">
            <a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm my-2"><span class="bi bi-reply"></span>Regresar</a>
        </div>
    </div> 
</div>

<div class="container bg-light">
    <div class="row">
        <form class="row g-3" action="{{ route('customers.update', $customer->id) }}" method="post">
            @csrf
            @method("PUT")
             <div class="col">
                <div class="row mb-4">
                    <label for="">Información del personal</label>
                </div>
                <div class="row">
                    <label for="name" class="form-label">Nombres</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $customer->name }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="lastname" class="form-label">Apellidos</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ $customer->lastname }}">
                        @if ($errors->has('lastname'))
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="date" class="form-control @error('birthdate') is-invalid @enderror" id="birthdate" name="birthdate" value="{{ $customer->birthdate }}">
                        @if ($errors->has('birthdate'))
                            <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="documentype" class="form-label">Tipo de documento</label>
                    <div class="input-group input-group-sm mb-3">
                        <select name="documentype" id="documentype" class="form-select form-select-lg mb-3" value="{{ $customer->documentype }}">
                            <option value="{{ $customer->documentype }}">{{ $customer->documentype }}</option>
                            <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                            <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                            <option value="Permiso por Protección Temporal">Permiso por Protección Temporal</option>
                          </select>
                        @if ($errors->has('documentype'))
                            <span class="text-danger">{{ $errors->first('documentype') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="idnumber" class="form-label">Número de documento</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control @error('idnumber') is-invalid @enderror" id="idnumber" name="idnumber" value="{{ $customer->idnumber }}">
                        @if ($errors->has('idnumber'))
                            <span class="text-danger">{{ $errors->first('idnumber') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <label for="datentry class="form-label">Fecha de ingreso</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="date" class="form-control @error('datentry') is-invalid @enderror" id="datentry" name="datentry" value="{{ $customer->datentry }}">
                        @if ($errors->has('datentry'))
                            <span class="text-danger">{{ $errors->first('datentry') }}</span>
                        @endif
                    </div>
                </div>  
             </div>
             <div class="col">
                <div class="row mb-4">
                    <label for="">Información de contacto</label>
                </div>
                <div class="row">
                    <label for="address" class="form-label">Dirección de residencia</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ $customer->address }}">
                        @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <label for="phone" class="form-label">Teléfono</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $customer->phone }}">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <div class="input-group input-group-sm mb-3">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $customer->email }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                
             </div>
             <div class="mb-3 row">
                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Actualizar">
            </div>
        </form>
    </div>
</div>    
@endsection
