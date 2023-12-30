@extends('layouts.app')

@section('content')

    <div class="container rounded-top background-nord16 text-nord6">
        <div class="row">
            <div class="col p-2">
                <label class="" for="">Reportar diagnóstico solicitado</label>
                <p class=""></p>
            </div>
            <div class="col d-flex justify-content-md-end align-items-center">
                <a href="{{ route('reports.index') }}" class="btn btn-primary btn-sm my-2"><span
                        class="bi bi-reply"></span>Regresar</a>
            </div>
        </div>
    </div>

    <div class="container bg-light">
        <div class="row">
            <div class="col mb-4 mt-4">
                <div class="row mb-3">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Número de solicitud</span>
                        <input type="text" class="form-control" value="{{ $support->numerosolicitud }}" Readonly>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Fecha y hora</span>
                        <input type="text" class="form-control" value="{{ $support->created_at }}" Readonly>
                    </div>
                </div>
            </div>
        </div>

        <!--Informacion del Equipo-->
        <div class="row">
            <div class="col-md-12">
                <label for="">Información del equipo</label>
            </div>

            <div class="col mb-4 mt-4">
                <div class="row mb-3">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Marca</span>
                        <input type="text" class="form-control" value="{{ $detail->brand }}" Readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Model</span>
                        <input type="text" class="form-control" value="{{ $detail->model }}" Readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Número de serial</span>
                        <input type="text" class="form-control" value="{{ $support->numerosolicitud }}" Readonly>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Descripción del problema</span>
                        <textarea type="text" class="form-control" value="" Readonly>{{ $detail->description }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Diagnostico del Equipo-->
    <div class="container bg-light mt-4 mb-4">
        <div class="row">
            <form class="row g-3" action="{{ route('reports.store') }}" method="post">
                @csrf
                <input type="hidden" class="form-control" id="requestnumber" name="requestnumber"
                    value="{{ $support->id }}" readonly>
                <input type="hidden" class="form-control" id="detailnumber" name="detailnumber" value="{{ $detail->id }}"
                    readonly>

                <div class="col col mb-4 mt-2">
                    <div class="row mt-4">
                        <div class="input-group">
                            <span for="servicerequired" class="input-group-text">Tipo de servicio requerido</span>
                            <select name="servicerequired" id="servicerequired"
                                class="form-select @error('requestype') is-invalid @enderror"
                                value="{{ old('servicerequired') }}">
                                <option selected></option>
                                @if ($service->count())
                                    @foreach ($service as $services)
                                        <option value="{{ $services->id }}">{{ $services->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('requestype')
                                <div class="notice notice-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="input-group">
                            <span for="reportdiagnostic" class="input-group-text">Diagnóstico técnico</span>
                            <textarea class="form-control @error('reportdiagnostic') is-invalid @enderror" id="reportdiagnostic"
                                name="reportdiagnostic" value="{{ old('reportdiagnostic') }} style="height: 100px"></textarea>
                            @error('reportdiagnostic')
                                <div class="notice notice-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <!--Costo Reparacion del Equipo-->
                        <div class="row mt-6">
                            <label for="products" class="form-label">Requerimientos para la Reparación</label>
                        </div>
                        <div class="col col mb-4 mt-2">
                            <!--Producto 1-->
                            <div class="row mt-2">
                                <div class="input-group">
                                    <span for="name" class="input-group-text">Item1</span>
                                    <select name="product1" id="product1" class="form-select"
                                        value="{{ old('product1') }}">
                                        <option selected></option>
                                        @if ($product->count())
                                            @foreach ($product as $products)
                                                <option value="{{ $products->id }}",
                                                    data-price="{{ $products->precio_venta }}">{{ $products->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>


                            <!--Producto 2-->
                            <div class="row mt-4">
                                <div class="input-group">
                                    <span for="name" class="input-group-text">Item2</span>
                                    <select name="product2" id="product2" class="form-select"
                                        value="{{ old('product2') }}">
                                        <option selected></option>
                                        <option value="Item1">Item1</option>
                                        @if ($product->count())
                                            @foreach ($product as $products)
                                                <option value="{{ $products->id }}">{{ $products->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <!--Producto 3-->
                            <div class="row mt-4">
                                <div class="input-group">
                                    <span for="name" class="input-group-text">Item3</span>
                                    <select name="product3" id="product3" class="form-select"
                                        value="{{ old('product3') }}">
                                        <option selected></option>
                                        @if ($product->count())
                                            @foreach ($product as $products)
                                                <option value="{{ $products->id }}">{{ $products->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <!--Producto 4-->
                            <div class="row mt-4">
                                <div class="input-group">
                                    <span for="name" class="input-group-text">Item4</span>
                                    <select name="product4" id="product4" class="form-select"
                                        value="{{ old('product4') }}">
                                        <option selected></option>
                                        @if ($product->count())
                                            @foreach ($product as $products)
                                                <option value="{{ $products->id }}">{{ $products->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col col mb-4 mt-2">
                            <!--Producto 5-->
                            <div class="row mt-2">
                                <div class="input-group">
                                    <span for="name" class="input-group-text">Item5</span>
                                    <select name="product5" id="product5" class="form-select"
                                        value="{{ old('product5') }}">
                                        <option selected></option>
                                        @if ($product->count())
                                            @foreach ($product as $products)
                                                <option value="{{ $products->id }}">{{ $products->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <!--Producto 6-->
                            <div class="row mt-4">
                                <div class="input-group">
                                    <span for="name" class="input-group-text">Item6</span>
                                    <select name="product6" id="product6" class="form-select"
                                        value="{{ old('product6') }}">
                                        <option selected></option>
                                        @if ($product->count())
                                            @foreach ($product as $products)
                                                <option value="{{ $products->id }}">{{ $products->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <!--Producto 7-->
                            <div class="row mt-4">
                                <div class="input-group">
                                    <span for="name" class="input-group-text">Item7</span>
                                    <select name="product7" id="product7" class="form-select"
                                        value="{{ old('product7') }}">
                                        <option selected></option>
                                        @if ($product->count())
                                            @foreach ($product as $products)
                                                <option value="{{ $products->id }}">{{ $products->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <!--Producto 8-->
                            <div class="row mt-4">
                                <div class="input-group">
                                    <span for="name" class="input-group-text">Item8</span>
                                    <select name="product8" id="product8" class="form-select"
                                        value="{{ old('product8') }}">
                                        <option selected></option>
                                        @if ($product->count())
                                            @foreach ($product as $products)
                                                <option value="{{ $products->id }}">{{ $products->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Boton Enviar-->
                <div class="mb-3 row">
                    <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Enviar">
                </div>
            </form>
        </div>
    </div>
@endsection
