<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Whoops\Run;

class Dashboard extends Controller
{
    public function __Construct()
    {
        $this->middleware('auth');
    }
    public function Index()
    {
        return view('Dashboard.index');
    }
    public function Products()
    {
        return view('Dashboard.Products');
    }

    public function createProducts(Request $request)
    {
        $validated = $request->validate([
            'ProductName' => 'required|string|unique:Products',
        ]);

        $products = Product::Create([
            'ProductName' => $request->ProductName

        ]);

        $products->save();
        return redirect('/Dashboard/Product');
    }


    public function GetProduct(Request $request)
    {

        if ($request->search) {

            $products = Product::where('ProductName', 'like', '%' . $request->search . '%')->get();
        } else {
            $products = Product::all();
        }

        return view('Dashboard.Products', ['Products' => $products]);
    }
    public function Del($id)
    {

        $products = Product::find($id);
        $products->delete();
        return Redirect('/Dashboard/Product');
    }

    public function edit(Request $request)
    {
        $validated = $request->validate([
            'ProductName' => 'required|string|unique:Products',
        ]);
        $products = Product::find($request->ProductId);

        $products->ProductName = $request->ProductName;


        $products->save();
        return Redirect('/Dashboard/Product');
    }




    public function Search(Request $request)
    {

        $products = Product::where('ProductName', 'like', '%' . $request->search . '%')->get();

        return view('Dashboard.ProductDetails', ['ProductDetails' => $products]);
    }


    public function GetProductsDetails()
    {
        $products = Product::all();
        $productsdetails = DB::table('product_details')
            ->join('Products', 'product_details.ProductId', '=', 'Products.id')

            ->get();
        return view('Dashboard.Productdeltails', ['ProductDetails' => $productsdetails, 'Products' => $products]);
    }

    public function createProductDetails(Request $request)
    {
        $products = ProductDetails::create([

            'color' => $request->color,
            'Price' => $request->price,
            'Qty' => $request->qty,
            'Description' => $request->description,
            'ProductId' => $request->product_id,
            'images' => $request->imag

        ]);
        $products->save();
        return Redirect('/Dashboard/GetProductsDetails');
    }
}
