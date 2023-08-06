<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function index(){
        $customers = customer::all();
        return view('customer.Index', compact('customers'));
    }

    public function addcustomer(){
        return view('customer.add');
    }

    public function create(Request $request){
        
        $customer = new customer();
        $customer->FirstName =  $request->FirstName;
        $customer->LastName = $request->LastName;
        $customer->Phone = $request->Phone;
        $customer->Email = $request->Email;
        $customer->save();

        return redirect()->back()->with('Success', 'Customer registered successfully');
    }
    
    public function edit($id){
        $customers = customer::where('CustomerID','=',$id)->first();
        return view('customer.edit-customer', compact('customers'));
    }

    public function updatecustomer(Request $request){

        $id =  $request->CustomerID;
        $FirstName =  $request->FirstName;
        $LastName = $request->LastName;
        $Phone = $request->Phone;
        $Email = $request->Email;
        
        Customer:: where('CustomerID','=',$id)->update([
            'FirstName'=>$FirstName,
            'LastName'=>$LastName,
            'Phone'=>$Phone,
            'Email'=>$Email
        ]);
        return redirect()->back()->with('Success', 'Customer updated successfully');
    }

    public function deletecustomer($id){
        Customer:: where('CustomerID','=',$id)->delete();
        return redirect()->back()->with('Success', 'Customer deleted successfully');
    }
}
