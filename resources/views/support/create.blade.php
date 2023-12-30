@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="mb-3" for="">Crear solicitud de soporte técnico</label>
            <p class="">Por favor, llena los campos de este formulario para crear una solicitud de soporte técnico.</p>
        </div>
        <div class="col d-flex justify-content-md-end align-items-center">
            <a href="{{ route('support.index') }}" class="btn btn-primary btn-sm my-2"><span class="bi bi-reply"></span>Regresar</a>
        </div>
    </div> 
</div>

<div class="container bg-light mb-3">
    <div class="row">
            <form class="row g-3" action="{{ route('support.store') }}" method="post">
                @csrf
                
                <div class="col">
                    <div class="row">
                        <label for="requestnumber" class="form-label">Solicitud N°</label>
                             <div class="mb-3 col-md-12">
                                 <input type="text" class="form-control form-control-sm @error('requestnumber') is-invalid @enderror" id="requestnumber" name="requestnumber" value="{{ old('requestnumber') }}">
                                 @if ($errors->has('requestnumber'))
                                     <span class="text-danger">{{ $errors->first('requestnumber') }}</span>
                                 @endif
                        </div>
                    </div>

                    <div class="row">
                         <div class="mb-3 col-md-12">
                            <label for="requestype" class="form-label">Tipo de solicitud</label>
                                 <select name="requestype" id="requestype" class="form-control form-control-sm @error('requestype') is-invalid @enderror" value="{{ old('requestype') }}">
                                     <option selected></option>
                                         @if ($tipo->count())
                                             @foreach ($tipo as $types)
                                                 <option value="{{ $types->id }}">{{ $types->name }}</option>
                                             @endforeach
                                         @endif
                              </select>
                                @if ($errors->has('requestype'))
                                    <span class="text-danger">{{ $errors->first('requestype') }}</span>
                                @endif
                         </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <label for="customers" class="form-label">Clientes</label>
                        <div class="mb-3 col-md-12">
                            <select name="customers" id="customersSelect" class="form-control form-control-sm @error('customers') is-invalid @enderror" value="{{ old('customers') }}">
                                <option selected></option>
                                @if ($cliente->count())
                                        @foreach ($cliente as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->idnumber }},{{ $customer->name }}</option>
                                        @endforeach
                                    @endif
                            </select>
                                @if ($errors->has('customers'))
                                    <span class="text-danger">{{ $errors->first('customers') }}</span>
                                @endif
                        </div>
                    </div>
                </div>
     </div>
                <div class="row mb-4">
                    <div class="row md-12 mb-4">
                        <label for="">Datos del equipo</label>
                    </div>
                    <div class="col">
                        <div class="row">
                            <label for="brand" class="form-label">Marca</label>
                            <div class="mb-3 col-md-12">
                                <input type="text" class="form-control form-control-sm @error('brand') is-invalid @enderror" id="brand" name="brand" value="{{ old('brand') }}">
                                    @if ($errors->has('brand'))
                                        <span class="text-danger">{{ $errors->first('brand') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="model" class="form-label">Modelo</label>
                            <div class="mb-3 col-md-12">
                                <input type="text" class="form-control form-control-sm @error('model') is-invalid @enderror" id="model" name="model" value="{{ old('model') }}">
                                    @if ($errors->has('model'))
                                        <span class="text-danger">{{ $errors->first('model') }}</span>
                                    @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="serialnumber" class="form-label">Numero Serial</label>
                            <div class="mb-3 col-md-12">
                                <input type="text" class="form-control form-control-sm @error('serialnumber') is-invalid @enderror" id="serialnumber" name="serialnumber" value="{{ old('serialnumber') }}">
                                    @if ($errors->has('serialnumber'))
                                        <span class="text-danger">{{ $errors->first('serialnumber') }}</span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <label for="description" class="form-label">Descripcion del problema</label>
                            <div class="mb-3 col-md-12">
                                <textarea class="form-control form-control-sm @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }} style="height: 100px"></textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 mt-4">
                        <input type="submit" class="col-md-2 offset-md-5 btn btn-primary" value="Registrar">
                    </div>
                </div>
            </form>
</div>
@endsection