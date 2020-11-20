<?php

namespace App\Http\Controllers;

use App\Http\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    function customerList()
    {
        $customer = $this->customerService->getAll();
        return view('customer.list', compact('customer'));
    }

    function create()
    {
        return view('customer.create');
    }
    function store(){

        return redirect()->route('customer.customerList');
    }

    function  edit($id){

        return view('customer.edit');
    }
}
