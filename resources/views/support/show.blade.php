@extends('layouts.app')


@section('content')

<div class="container rounded-top background-nord16 text-nord6">
    <div class="row">
        <div class="col p-2">
            <label class="" for="">Informe de diagnóstico.</label>
            <p class=""></p>
        </div>
        <div class="col d-flex justify-content-md-end align-items-center">
            <a href="{{ route('support.index') }}" class="btn btn-primary btn-sm my-2"><span class="bi bi-reply"></span>Regresar</a>
        </div>
    </div> 
</div>

<!--Informacion del cliente-->
<div class="container bg-light">
    <div class="row">
        <div class="col mb-4 mt-4">
            <div class="row mb-3">
                <div class="input-group">
                    <span for="name" class="input-group-text">Número de solicitud</span>
                    <input type="text" class="form-control" value="{{ $supportdetail->numerosolicitud }}" Readonly>
                </div>
            </div>
               
            <div class="row mt-4">
                 <div class="input-group">
                    <span for="name" class="input-group-text">Tipo de solicitud</span>
                    <input type="text" class="form-control" value="{{ $supportype->name }}" Readonly>
                 </div>
            </div>

            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Cliente</span>
                    <input type="text" class="form-control" value="{{ $customername->name }}" Readonly>
                </div>
            </div>
        </div>
    
        <div class="col mb-4">
                <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Fecha y hora</span>
                        <input type="text" class="form-control" value="{{ $supportdetail->created_at }}" Readonly>
                     </div>
                </div>
        </div>
    </div>
</div>

<!--Informacion del equipo de computo-->
<div class="container bg-light mt-4">
    <div class="row">
        <div class="col mb-4 mt-4">
            <div class="row mb-3">
                <div class="input-group">
                    <span for="name" class="input-group-text">Marca</span>
                    <input type="text" class="form-control" value="{{ $detalle->model }}" Readonly>
                </div>
            </div>
               
            <div class="row mt-4">
                 <div class="input-group">
                    <span for="name" class="input-group-text">Modelo</span>
                    <input type="text" class="form-control" value="{{ $detalle->model }}" Readonly>
                 </div>
            </div>
        </div>
    
        <div class="col mb-4">
                <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Número de serial</span>
                        <input type="text" class="form-control" value="{{ $detalle->serialnumber }}" Readonly>
                     </div>
                </div>

                <div class="row mt-4">
                    <div class="input-group">
                        <span for="name" class="input-group-text">Descripción del problema</span>
                        <textarea type="text" class="form-control" value="" Readonly>
                            {{ $detalle->description }}
                        </textarea>
                    </div>
                </div>
        </div>
    </div>
</div>

<!--Dignostico y costos de reparacion y mantenimiento-->
<div class="container bg-light mt-4 mb-4">
    <div class="row">
        <div class="col mb-4 mt-4">
            <div class="row mb-3">
                <div class="input-group">
                    <span for="name" class="input-group-text">Tipo de servicio requerido</span>
                    <input type="text" class="form-control" value="{{ $serviciorequerido->name }}" Readonly>
                </div>
            </div>
               
            <div class="row mt-4">
                 <div class="input-group">
                    <span for="name" class="input-group-text">Diagnóstico</span>
                    <input type="text" class="form-control" value="{{ $supportdiagnostic->reportdiagnostic }}" Readonly>
                 </div>
            </div>

            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Item1</span>
                    <input type="text" class="form-control" value="{{ $product1->name }}" Readonly>
                </div>
            </div>

            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Item2</span>
                    <input type="text" class="form-control" value="{{ $product2->name }}" Readonly>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Item3</span>
                    <input type="text" class="form-control" value="{{ $product3->name }}" Readonly>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Item4</span>
                    <input type="text" class="form-control" value="{{ $product4->name }}" Readonly>
                </div>
            </div>

            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Item5</span>
                    <input type="text" class="form-control" value="{{ $product5->name }}" Readonly>
                </div>
            </div>

            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Item6</span>
                    <input type="text" class="form-control" value="{{ $product6->name }}" Readonly>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Item7</span>
                    <input type="text" class="form-control" value="{{ $product7->name }}" Readonly>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Item8</span>
                    <input type="text" class="form-control" value="{{ $product8->name }}" Readonly>
                </div>
            </div>

            <div class="row mt-4">
                <div class="input-group">
                    <span for="name" class="input-group-text">Costo de reparación</span>
                    <input type="text" class="form-control" value="{{ $totalPrice }}" Readonly>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection