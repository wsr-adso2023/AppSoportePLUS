<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;
use App\Models\Servicerequired;
use App\Models\Supportdetail;
use App\Models\Diagnosticreports;
use App\Models\Product;

class DiagnosticreportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('support.requests');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $report = new Diagnosticreports;
        $report->request_id = $request->requestnumber;
        $report->detail_id = $request->detailnumber;
        $report->servicerequired_id = $request->servicerequired;
        $report->reportdiagnostic = $request->reportdiagnostic;
        $report->product1 = $request->product1;
        $report->product2 = $request->product2;
        $report->product3 = $request->product3;
        $report->product4 = $request->product4;
        $report->product5 = $request->product5;
        $report->product6 = $request->product6;
        $report->product7 = $request->product7;
        $report->product8 = $request->product8;
        $report->save();

        return redirect()->back()->with('success', 'El informe de diagnóstico fue registrado exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Obtener el SupportDetail por su ID
		$support = Support::find($id);
        $supportdetail = Supportdetail::find($id);
        $servicerequired = Servicerequired::all();
        $productstock = Product::all();

        return view('support.reports', ['support' => $support, 'service' => $servicerequired, 'detail' => $supportdetail, 'product' => $productstock
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
