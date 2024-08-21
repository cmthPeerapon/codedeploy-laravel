<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', ['customers' => $customers]);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.show', ['customer' => $customer]);
    }
}
