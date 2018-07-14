<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producer;
use DB;

class ProducerController extends Controller
{
    //
     function getProducer($id)
    {
    	  /*$producers = new Producer();*/
    	/*$data = DB::table('products')->get();*/
    	$data = DB::table('nhasanxuat')
    						->join('products','nhasanxuat.IDnsx','=','products.NSX')
    						->where('nhasanxuat.IDnsx','=',$id)
    						->select('products.*','nhasanxuat.TenNSX')
    						->paginate(6);
    	return view('client.producer',['producers'=>$data]);
    }
}
