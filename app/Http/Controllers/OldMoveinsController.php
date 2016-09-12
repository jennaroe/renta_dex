<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Moveins;
use App\Http\Requests;

class MoveInsController extends Controller
{
    	// public function index() {
     //    $page_title = 'Signed Leases';
    	// 	return view('moveins', compact('page_title')); 
    	// }

   		public function view() {
        	$page_title = 'Signed Leases';
    		return view('moveins', compact('page_title'));
    	}

    /**
     * Display a listing of the resource.
     *
     // * @return \Illuminate\Http\Response
     */
    	public function index(Request $request){
        	$moveIns = moveIns::latest()->paginate(5);
        return response()->json($moveIns);
    	
    	}

    // *
    //  * Store a newly created resource in storage.
    //  *
     // * @param  \Illuminate\Http\Request  $request
     // * @return \Illuminate\Http\Response
     
    public function store(Request $request)
    {
        $create = moveIns::create($request->all());
        return response()->json($create);
    }

    // *
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function update(Request $request, $id)
    {
        $edit = moveIns::find($id)->update($request->all());
        return response()->json($edit);
    }

    // *
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function destroy($id)
    {
        moveIns::find($id)->delete();
        return response()->json(['done']);
    }
}
