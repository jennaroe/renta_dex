<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request\InvoiceRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Invoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Invoices';
        $invoices = Invoice::all();
        return view('invoice.index', compact('invoices', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceRequest $request)
    {
        Invoice::create($request->all());
        return redirect()->route('invoices.index')->with('message','item has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoices)
    {
       return view('invoice.edit',compact('invoices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InvoiceRequest $request, Invoice $invoices)
    {
        $invoices->update($request->all());
        return redirect()->route('invoices.index')->with('message','Invoice has been updated successfully');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoices)
    {
        $invoices->delete();
        return redirect()->route('invoices.index')->with('message','Invoice has been deleted successfully');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}