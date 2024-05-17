<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductOrder;
use Illuminate\Http\Request;

class ProductOrderController extends Controller
{
    public function getAllorder(){
        return $allorder = ProductOrder::orderBy('id', 'DESC')->get();
    }



    public function index(){
        $orders = $this->getAllorder();

        return view('admin.customer.order.index', compact('orders'));
    }
}
