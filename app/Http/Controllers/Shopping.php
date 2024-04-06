<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class Shopping extends Controller
{
 
    public function ShowListItemPhone(Request $request){
        $data = DB::table('Products')
        ->join('product_details', 'products.id', '=', 'product_details.ProductId')
        ->get();
        
          //dd($data);
        $tax = 0.15;
        $discount=10;
    
        foreach ($data as $key => $value) {
            $data[$key]->total=($data[$key]->Price*$tax)+$data[$key]->Price;
            $data[$key]->discount=$discount;
            $data[$key]->tax=$tax;
            $data[$key]->net=$data[$key]->total-$data[$key]->discount;
        }
        
        return view('shopping.list-items' ,['data'=>$data] );
    
    }
   
    
    public function ShowDetailsPhone($id){
            //dd($id);
        $data = DB::table('Products')
        ->join('product_details', 'products.id', '=', 'product_details.ProductId')
        ->where('product_details.id' , $id)
        ->first();
        
        //dd($data);
        $tax=0.15;
        $descount = 10;
        $data->total = $data->Price * $tax + $data->Price;
        $data->tax = $tax;
        $data->discount = 10;
        $data->net = $data->total - $data->discount;
      // return $data;
        return view('shopping.details' ,['data'=>$data] );
        
    }


    public function AddToCart(Request $request , $id){
        $userid = $request->user()->id;
        $data= DB::table('Products')
        ->join('product_details', 'products.id', '=', 'product_details.ProductId')
        ->where('product_details.id' , $id)
        ->first();
        $tax=0.15;
        $descount = 10;
        $data->total = $data->Price * $tax + $data->Price;
        $data->tax = $tax;
        $data->descount = 10;
        $data->net = $data->total - $data->descount;

        $row = [
            'productId'=>$data->id,
            'price'=>$data->Price,
            'Qty'=>$data->Qty,
            'Tax'=>$data->tax,
            'Total'=>$data->total,
            'Desc'=>$data->descount,
            'UserId'=>$userid,
            'Net'=>$data->net,
        ];

        DB::table('carts')->insert($row);
        $count = DB::table('carts')->where('UserId' , $userid)->count();
        Session::put('count' , $count);
        return redirect()->back()->with('message', 'Product Added To Cart');

    }

 

 

}

