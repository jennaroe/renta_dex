<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
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
       return view('users.edit',compact('users'));
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
}
