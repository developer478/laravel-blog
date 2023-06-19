<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Schema;

class CustomerController extends Controller
{
    /**
     * Get All POST.
     *
     * @return collection
     */
    public function index()
    {

        $customers = Customer::get();
        return view('customer',['customers' => $customers]);

    }

}
