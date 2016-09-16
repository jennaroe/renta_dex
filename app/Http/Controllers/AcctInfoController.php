<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;

class AcctInfoController extends Controller
{
    public function index() 
    {
    	    $users = User::all();
        	$page_title = 'Profile';
    		return view('acctInfo', compact('page_title')); 
    	}

    public function edit(User $users)
    {
       return view('acctInfo',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $users)
    {
        $users = Auth::user();

        $users->update($request->all());
        return redirect()->route('acctInfo')->with('message','Item has been updated successfully');    
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        $users->delete();
        return redirect()->route('acctInfo')->with('message','Item has been deleted successfully');
    }
}
