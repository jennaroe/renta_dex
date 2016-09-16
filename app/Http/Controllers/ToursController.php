<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToursRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tours;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tours::all();
        $page_title = 'Tours';
        return view('tours.index', compact('tours', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToursRequest $request)
    {
        Tours::create($request->all());
        return redirect()->route('tours.index')->with('message','item has been added successfully');
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
    public function edit(Tours $tours)
    {
       return view('tours.edit',compact('tours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ToursRequest $request, Tours $tours)
    {
        $tours->update($request->all());
        return redirect()->route('tours.index')->with('message','Item has been updated successfully');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tours $tours)
    {
        $tours->delete();
        return redirect()->route('tours.index')->with('message','Item has been deleted successfully');
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
}
