@extends('layouts.app')

@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Informacion del producto</label>
            <p class=""></p>
        </div>
        <div class="col d-flex justify-content-md-end align-items-center">
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm my-2"><span class="bi bi-reply"></span>Regresar</a>
        </div>
    </div> 
</div>

<div class="container bg-light">
    <div class="row">
        <div class="col mb-4 mt-4">
            <div class="row mb-3">
                <div class="input-group">
                    <span for="name" class="input-group-text">Nombre</span>
                    <input type="text" class="form-control" value=" {{ $product->name }}" Readonly>
                </div>
            </div>
               
            <div class="row mt-4">
                 <div class="input-group">
                    <span for="stock" class="input-group-text">Stock</span>
                    <input type="text" class="form-control" value=" {{ $product->stock }}" Readonly>
                 </div>
            </div>

            <div class="row mt-4">
                <div class="input-group">
                    <span for="precio_venta" class="input-group-text">Precio de venta</span>
                    <input type="text" class="form-control" value=" {{ $product->precio_venta }}" Readonly>
                </div>
            </div>

            <div class="row mt-4">
                 <div class="input-group">
                    <span for="category" class="input-group-text">Categoría</span>
                    <input type="text" class="form-control" value=" {{ $product->category }}" Readonly>
                 </div>
         </div>
    </div>
        <div class="col mb-4">
                <div class="row mt-4">
                    <div class="input-group">
                        <span for="description" class="input-group-text">Descripción</span>
                        <input type="text" class="form-control" value=" {{ $product->description }}" Readonly>
                     </div>
                </div>
        </div>
    </div>
</div>

<div class="container bg-light mt-4">
    <div class="col-md-4">
        <div class="row">
            <div class="input-group mt-4">
                <span for="supplier_id" class="input-group-text">Proveedor</span>
                <input type="text" class="form-control" value=" {{ $product->suppliers->name }}" Readonly>
            </div>
        </div>

        <div class="row mt-4">
            <div class="input-group mb-4">
                <span for="date" class="input-group-text">Feha de ingreso</span>
                <input type="text" class="form-control" value=" {{ $product->date }}" Readonly>
            </div>
        </div>
    </div>
</div>
@endsection
