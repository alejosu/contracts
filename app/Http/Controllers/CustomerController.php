<?php

namespace Contracts\Http\Controllers;

use Illuminate\Http\Request;
use Contracts\Customer;

class CustomerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custs = Customer::paginate(9);

    	return view('allCustomers', compact('custs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(),[

        		'nit' 		=> 'required|min:4',
        		'name'		=> 'required|max:200',
        		'phone'		=> 'required',
        		'address' 	=> 'required',
        		'adminName' => 'required'
        	]);

        Customer::create(request(['nit','name','phone','address','adminName']));

        $custs = Customer::paginate(9);

    	return view('allCustomers', compact('custs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $custs)
    {
        return view('customerView', compact('custs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
