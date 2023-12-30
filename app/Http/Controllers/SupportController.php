<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Support;
use App\Models\Supportdetail;
use App\Models\Supporttype;
use App\Models\StatesSupport;
use Illuminate\View\View;
use App\Http\Requests\StoreSupportRequest;
use App\Models\Diagnosticreports;
use App\Models\Product;
use App\Models\Servicerequired;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SupportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-support|edit-support|delete-support', ['only' => ['index','show']]);
        $this->middleware('permission:create-support', ['only' => ['create','store']]);
        $this->middleware('permission:edit-support', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-support', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('support.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Customer::all();
        $estados = StatesSupport::all();
        $tipos = Supporttype::all();
        return view('support.create', ['cliente' => $clientes, 'estado' => $estados, 'tipo' => $tipos]);
    }


    /**
     * Store a newly created resource in storage.
     */
    
    public function store(StoreSupportRequest $request)
    {
        $supportData = $request->only(['requestype', 'customers', 'requestnumber']);

    $support = new Support();
    $support->type_id = $supportData['requestype'];
    $support->customer_id = $supportData['customers'];
    $support->numerosolicitud = $supportData['requestnumber'];
    $support->save();

    $supportDetail = new Supportdetail();
    $supportDetail->support_id = $support->id; // Relaciona el detalle con el support creado arriba
    $supportDetail->description = $request->input('description');
    $supportDetail->brand = $request->input('brand');
    $supportDetail->model = $request->input('model');
    $supportDetail->serialnumber = $request->input('serialnumber');
    //$supportDetail->observation = $request->input('observation');
    $supportDetail->save();

    // Otra lógica que necesites...

    return redirect()->back()->with('success', 'La solicitud fue registrada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View|RedirectResponse
    {
        // Encuentra el soporte por ID
        $reportsupport = Support::find($id);


        // Encuentra el nombre del cliente en el soporte por su ID
        $reportcustomername = Customer::find($reportsupport->customer_id);

        // Encuentra el tipo de soporte por su ID
        $reportsupportype = Supporttype::find($reportsupport->type_id);



        // Encuentra el detalle de soporte por ID
        $supportdetail = Supportdetail::find($id);

        // Encuentra el informe de diagnóstico por ID
        $report = Diagnosticreports::find($id);
        
        if (!$report) {
            return redirect()->back()->with('info', 'Informe de diagnóstico aun no esta disponible');
        }

        // Encuentra los productos en el informe por sus ID
        $reportproduct1 = Product::find($report->product1);
        $reportproduct2 = Product::find($report->product2);
        $reportproduct3 = Product::find($report->product3);
        $reportproduct4 = Product::find($report->product4);
        $reportproduct5 = Product::find($report->product5);
        $reportproduct6 = Product::find($report->product6);
        $reportproduct7 = Product::find($report->product7);
        $reportproduct8 = Product::find($report->product8);


        // Encuentra el servicio requerido en el informe por su ID
        $reportservicerequired = Servicerequired::find($report->servicerequired_id);

        
        
        // Calcula el costo de reparacion segun los precios de los productos
        $totalPrice = $reportproduct1->precio_venta + $reportproduct2->precio_venta + $reportproduct3->precio_venta + $reportproduct4->precio_venta + $reportproduct5->precio_venta + $reportproduct6->precio_venta + $reportproduct7->precio_venta + $reportproduct8->precio_venta;


        // Retorna la vista 'support.show' con los datos necesarios
        return view('support.show', [
            'detalle' => $supportdetail,
            'supportdetail' => $reportsupport,
            'supportdiagnostic' => $report,
            'product1' => $reportproduct1,
            'product2' => $reportproduct2,
            'product3' => $reportproduct3,
            'product4' => $reportproduct4,
            'product5' => $reportproduct5,
            'product6' => $reportproduct6,
            'product7' => $reportproduct7,
            'product8' => $reportproduct8,
            'customername' => $reportcustomername,
            'supportype' => $reportsupportype,
            'serviciorequerido' => $reportservicerequired,
            'totalPrice' => $totalPrice,
        ]);
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
