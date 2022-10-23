<?php

namespace Bitfumes\Multiauth\Http\Controllers;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;
use App\Offer;
use App\Product;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$offers = Offer::all();
    	$products = Product::all();
    	return view('multiauth::offers.index')->with(compact('offers', 'products'));
    }
}
