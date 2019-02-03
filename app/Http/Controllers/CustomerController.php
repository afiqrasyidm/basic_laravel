<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		
		
		
		
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_customer');
		
		
    }
	public function create_post(Request $request){
		$customer = new Customer;

        $customer->name = $request["name"];
		$customer->email = $request["email"];;
		$customer->occupation = $request["occupation"];
		$customer->save();
		return view('view_customer', ['customer' => $customer]);
	}
	
	public function get(){
		$all_customer = Customer::all();
		
		return view('all_customer', ['all_customer' => $all_customer]);
	}

	
	public function edit($id)
    {
        //
		
		
		$customer = Customer::find($id);

		return view('edit_customer', ['customer' => $customer]);
	
	
    }
	public function edit_post(Request $request){
		$customer = Customer::find($request["id"]);
		
        $customer->name = $request["name"];
		$customer->email = $request["email"];;
		$customer->occupation = $request["occupation"];
		$customer->save();
		return view('view_customer', ['customer' => $customer]);
	
	
    }
	
	  public function delete($id)
    {
        //
		
		$customer = Customer::find($id);

		$customer->delete();
	
		return "Berhasil Di Delete";
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
  
}
