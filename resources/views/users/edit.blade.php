@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Modificar datos del usuario</label>
            <p class="">Por favor, proceda con la actualización de la información necesaria.</p>
        </div>
        <div class="col d-flex justify-content-md-end align-items-center">
            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm my-2"><span class="bi bi-reply"></span>Regresar</a>
        </div>
    </div> 
</div>

<div class="container bg-light">
    <div class="row">
        <form class="row g-3" action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method("PUT")
             <div class="col">
                <div class="row mb-4">
                    <label for="">Datos del usuario</label>
                </div>
                <div class="row">
                    <label for="name" class="form-label">Nombres</label>
                    <div class="mb-3 col-md-12">
                        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="lastname" class="form-label">Apellidos</label>
                    <div class="mb-3 col-md-12">
                        <input type="text" class="form-control form-control-sm @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ $user->lastname }}">
                        @if ($errors->has('lastname'))
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="date" class="form-control @error('birthdate') is-invalid @enderror" id="birthdate" name="birthdate" value="{{ $user->birthdate }}">
                        @if ($errors->has('birthdate'))
                            <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="documentype" class="form-label">Tipo de documento</label>
                    <div class="input-group input-group-sm mb-3">
                        <select name="documentype" id="documentype" class="form-select form-select-lg mb-3" value="{{ $user->documentype }}">
                            <option value="{{ $user->documentype }}">{{ $user->documentype }}</option>
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
                    <div class="mb-3 col-md-12">
                        <input type="text" class="form-control form-control-sm @error('idnumber') is-invalid @enderror" id="idnumber" name="idnumber" value="{{ $user->idnumber }}">
                        @if ($errors->has('idnumber'))
                            <span class="text-danger">{{ $errors->first('idnumber') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="phone" class="form-label">Teléfono</label>
                    <div class="mb-3 col-md-12">
                        <input type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $user->phone }}">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <div class="mb-3 col-md-12">
                      <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
             </div>
             <div class="col">
                <div class="row mb-4">
                    <label for="">Credenciales de acceso</label>
                </div>
                <div class="row">
                    <label for="username" class="form-label">Nombre de usuario</label>
                    <div class="mb-3 col-md-7">
                      <input type="text" class="form-control form-control-sm @error('username') is-invalid @enderror" id="username" name="username" value="{{ $user->username }}">
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="password" class="form-label">Contraseña</label>
                    <div class="mb-3 col-md-7">
                      <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" name="password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="password" class="form-label">Confirmar contraseña</label>
                    <div class="mb-3 col-md-7">
                      <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" name="password_confirmation">
                    </div>
                </div>
                <div class="row">
                    <label for="roles" class="form-label">Roles</label>
                    <div class="mb-4 col-md-7">         
                        <select class="form-select @error('roles') is-invalid @enderror" multiple aria-label="Roles" id="roles" name="roles[]">
                            @forelse ($roles as $role)

                                @if ($role!='Super Admin')
                                    <option value="{{ $role }}" {{ in_array($role, $userRoles?? []) ? 'selected' : '' }}>
                                    {{ $role }}
                                    </option>
                                @else
                                    @if (Auth::user()->hasRole('Super Admin'))   
                                        <option value="{{ $role }}" {{ in_array($role, $userRoles?? []) ? 'selected' : '' }}>
                                        {{ $role }}
                                        </option>
                                    @endif
                                @endif

                            @empty

                            @endforelse
                        </select>
                        @if ($errors->has('roles'))
                            <span class="text-danger">{{ $errors->first('roles') }}</span>
                        @endif
                    </div>
                </div>
             </div>
             <div class="mb-4 mt-4 row">
                <input type="submit" class="col-md-2 offset-md-5 btn btn-primary" value="Actualizar">
            </div>
        </form>
    </div>
</div>
@endsection
