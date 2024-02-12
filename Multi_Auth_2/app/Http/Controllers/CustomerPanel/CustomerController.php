<?php

namespace App\Http\Controllers\CustomerPanel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller {
    public function index() {

        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (Auth::user()->role === 'vendor') {
            return redirect()->route('vendor.dashboard');
        }
        return view('customer.dashboard');
    }
}
