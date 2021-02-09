<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\User;
use Illuminate\Http\Request;
use stdClass;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('supplier.index',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {

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
        $supplier = Supplier::where('user_id','=', $id)->first();
        $supplier->status = $request->status;
        $supplier->name = $request->name;
        $supplier->score = $request->score;
        $supplier->econhunt_deal = $request->ecohuntDeal;
        $supplier->link = $request->link;
        $supplier->sourcing = $request->sourcing;
        $supplier->cost = $request->cost;
        $supplier->processing = $request->processing;
        $supplier->special_line = $request->special_line;
        $supplier->branding = $request->branding;
        $supplier->couriers = $request->couriers;
        $supplier->support = $request->support;
        $supplier->return_policy = $request->return_policy;
        $supplier->pod = $request->pod;

        if($supplier->save()){
            $request->session()->flash('success', 'Supplier has been updated');
        }else{
            $request->session()->flash('error', 'There was an error updating...');

        }

        return redirect()->back();
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
