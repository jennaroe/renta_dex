<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommissionRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Commission;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Commission Tracker';
        $commissions = Commission::all();
        return view('commission.index', compact('commissions', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommissionRequest $request)
    {
        Commission::create($request->all());
        return redirect()->route('commissions.index')->with('message','item has been added successfully');
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
    public function edit(Commission $commissions)
    {
       return view('commission.edit',compact('commissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommissionRequest $request, Commission $commissions)
    {
        $commissions->update($request->all());
        return redirect()->route('commissions.index')->with('message','Item has been updated successfully');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commission $commissions)
    {
        $commissions->delete();
        return redirect()->route('commissions.index')->with('message','Item has been deleted successfully');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}