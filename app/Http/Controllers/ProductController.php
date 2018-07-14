<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use DB;
class ProductController extends Controller
{
    
    function getListProduct()
    {
    	/*  $products = new product();
    	$data = DB::table('products')->get();*/
    	$data = product::paginate(10);

    	return view('client.Products',['data'=>$data]);
    }
    function showDetail($id)
    {
    	$data = DB::table('products')->
    				join('origin','products.OriginID','=','Origin.OriginID')
    			->   join('nhasanxuat','nhasanxuat.IDnsx','=','products.NSX')
    			-> where('products.ProID','=',$id)
    			-> select('products.*','Origin.OriginName','nhasanxuat.TenNSX')
    			->first();	
    	
    	return view('client.ViewDetail',['data'=>$data]);
    }
}

