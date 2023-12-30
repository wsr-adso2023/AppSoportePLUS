@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Agregar producto</label>
            <p class="">Por favor, completa el siguiente formulario.</p>
        </div>
        <div class="col d-flex justify-content-md-end align-items-center">
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm my-2"><span class="bi bi-reply"></span>Regresar</a>
        </div>
    </div> 
</div>

<div class="container bg-light">
    <div class="row">
        <form class="row g-3" action="{{ route('products.store') }}" method="post">
            @csrf
             <div class="col">
                <div class="row mb-4">
                    <label for="">Producto</label>
                </div>
                <div class="row">
                    <label for="name" class="form-label">Nombre</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="stock" class="form-label">Stock</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ old('stock') }}">
                        @if ($errors->has('stock'))
                            <span class="text-danger">{{ $errors->first('stock') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="precio_venta" class="form-label">Precio de venta</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control @error('precio_venta') is-invalid @enderror" id="precio_venta" name="precio_venta" value="{{ old('precio_venta') }}">
                        @if ($errors->has('precio_venta'))
                            <span class="text-danger">{{ $errors->first('precio_venta') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="category" class="form-label">Categoría</label>
                    <div class="input-group input-group-sm mb-3">
                        <select name="category" id="category" class="form-select form-select-lg mb-3">
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
                    <label for="supplier_id" class="form-label">Proveedor</label>
                    <div class="input-group input-group-sm mb-3">
                        <select name="supplier_id" id="supplier_id" class="form-select  @error('supplier_id') is-invalid @enderror" value="{{ old('supplier_id') }}">
                            <option selected></option>
                            @if ($supplier->count())
                                    @foreach ($supplier as $suppliers)
                                        <option value="{{ $suppliers->id }}">{{ $suppliers->idnumber }},{{ $suppliers->name }}</option>
                                    @endforeach
                                @endif
                          </select>
                          @error('supplier_id')
                                <div class="notice notice-danger">{{ $message }}</div>
                          @enderror
                    </div>
                </div>

                <div class="row">
                    <label for="description" class="form-label">Descripción</label>
                    <div class="input-group input-group-sm mb-3">
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <label for="date" class="form-label">Feha de ingreso</label>
                    <div class="input-group input-group-sm mb-3">
                      <input type="date" class="form-control form-control-sm @error('date') is-invalid @enderror" id="date" name="date">
                        @if ($errors->has('date'))
                            <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                    </div>
                </div>
             </div>
             <div class="mb-3 row">
                <input type="submit" class="col-md-2 offset-md-5 btn btn-primary" value="Agregar">
            </div>
        </form>
    </div>
</div>
@endsection
