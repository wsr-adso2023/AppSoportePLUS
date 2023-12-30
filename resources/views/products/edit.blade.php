@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Modificar datos del producto</label>
            <p class="">Por favor, proceda con la actualización de la información necesaria.</p>
        </div>
        <div class="col d-flex justify-content-md-end align-items-center">
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm my-2"><span class="bi bi-reply"></span>Regresar</a>
        </div>
    </div> 
</div>

<div class="container bg-light">
    <div class="row">
        <form class="row g-3" action="{{ route('products.update', $product->id) }}" method="post">
            @csrf
            @method("PUT")
             <div class="col">
                <div class="row mb-4">
                    <label for="">Información del producto</label>
                </div>
                <div class="row">
                    <label for="name" class="form-label">Nombre</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="stock" class="form-label">Stock</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ $product->stock }}">
                        @if ($errors->has('stock'))
                            <span class="text-danger">{{ $errors->first('stock') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="precio_venta" class="form-label">Precio de venta</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control @error('precio_venta') is-invalid @enderror" id="precio_venta" name="precio_venta" value="{{ $product->precio_venta }}">
                        @if ($errors->has('precio_venta'))
                            <span class="text-danger">{{ $errors->first('precio_venta') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="category" class="form-label">Categoría</label>
                    <div class="input-group input-group-sm mb-3">
                        <select name="category" id="category" class="form-select form-select-lg mb-3">
                            <option value="{{ $product->category }}">{{ $product->category }}</option>
                            <option value="Tecnologia">Tecnología</option>
                            <option value="Consumible">Consumible</option>
                          </select>
                        @if ($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif
                    </div>
                </div>
             </div>
             <div class="col">
                <div class="row mb-4">
                    <label for="">Detalle del producto</label>
                </div>
                
                <div class="row">
                    <label for="description" class="form-label">Descripción</label>
                    <div class="mb-3 col-md-7">
                      <input type="description" class="form-control form-control-sm @error('description') is-invalid @enderror" id="description" name="description" value="{{ $product->description }}">
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <label for="date" class="form-label">Feha de ingreso</label>
                    <div class="mb-3 col-md-7">
                      <input type="date" class="form-control form-control-sm @error('date') is-invalid @enderror" id="date" name="date" value="{{ $product->date }}">
                        @if ($errors->has('date'))
                            <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                    </div>
                </div>
             </div>
             <div class="mb-3 row">
                <input type="submit" class="col-md-2 offset-md-5 btn btn-primary" value="Actualizar">
            </div>
        </form>
    </div>
</div>
@endsection
