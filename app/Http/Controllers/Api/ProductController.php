<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $allProduct = Product::paginate(10);
        if (!$allProduct) {
            return response(['error' => 'There is no product']);
        }
        return response()->json($allProduct);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->discount_id = $request->discount_id;
        $product->save();

        return response()->json($product);
    }

    public function show($product_id)
    {
        $product = Product::where('product_id', '=', (int)$product_id)->first();
        if (!$product) {
            return response(['error' => 'Product not found']);
        }
        return response()->json($product);
    }

    public function update(Request $request, $product_id)
    {
        $product = Product::where('product_id', '=', (int)$product_id)->first();
        if (!$product) {
            return response(['error' => 'Product not found']);
        }

        $product->name = $request->name;
        $product->discount_id = $request->discount_id;
        $product->save();

        return response()->json($product);
    }

    public function destroy($product_id)
    {
        $product = Product::where('product_id', '=', (int)$product_id)->first();
        if (!$product) {
            return response(['error' => 'Product not found']);
        }
        $product->delete();
        return response()->json(['success' => 'Product deleted']);
    }
}