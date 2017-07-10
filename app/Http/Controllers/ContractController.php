<?php

namespace Contracts\Http\Controllers;

use Illuminate\Http\Request;
use Contracts\Contract;
use Contracts\Customer;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::paginate(15);
        $customers = Customer::all();

        return view('allContracts', compact('contracts', 'customers'));
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
    public function store(Request $request)
    {
        $this->validate(request(),[

                'customer_id'    => 'required',
                'contract'       => 'required',
                'iniDate'        => 'required',
                'endDate'        => 'required',
                'amountTotal'    => 'required',
                'balance'        => 'required'
            ]);

        Contract::create(request(['customer_id','contract','iniDate','endDate','amountTotal','balance']));

        $contracts = Contract::paginate(15);
        $customers = Customer::all();

        return view('allContracts', compact('contracts', 'customers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
       return view('contractView', compact('contract')); 
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
