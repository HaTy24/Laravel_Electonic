<?php

namespace App\Http\Controllers;

use App\Models\product;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $products = DB::select('select * from product');
        return view('index', ['products' => $products]);
    }
    public function product(Request $request)
    {
        $product = DB::select('select * from product where id = ' . $request['id']);
        return view('product', ['product' => $product]);
    }
    public function delete(Request $r)
    {
        $id = $r['id'];
        // DB::delete('delete from product where id = :id', ['id' => $id]);
        DB::delete('delete from product where id = ' . $id);
        return redirect('/product');
    }

    public function store()
    {
        return view('store');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function push(Request $request)
    {
        $product = new product();
        $product->name = $request['name'];
        $product->category = $request['category'];
        $product->img = $request['img'];
        $product->price = $request['price'];
        // add other fields
        $product->save();
        return redirect('/');
    }
}
