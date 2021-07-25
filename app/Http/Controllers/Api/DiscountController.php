<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Discount;

class DiscountController extends Controller
{

    public function index()
    {
        $allDiscount = Discount::paginate(10);
        if (!$allDiscount) {
            return response(['error' => 'There is no discount']);
        }
        return response()->json($allDiscount);
    }

    public function store(Request $request)
    {
        $discount = new Discount;
        $discount->price_discount = $request->price_discount;
        $discount->save();

        return response()->json($discount);
    }

    public function show($discount_id)
    {
        $discount = Discount::where('discount_id', '=', (int)$discount_id)->first();
        if (!$discount) {
            return response(['error' => 'Discount not found']);
        }
        return response()->json($discount);
    }

    public function update(Request $request, $discount_id)
    {
        $discount = Discount::where('discount_id', '=', (int)$discount_id)->first();
        if (!$discount) {
            return response(['error' => 'Discount not found']);
        }

        $discount->price_discount = $request->price_discount;
        $discount->save();

        return response()->json($discount);
    }

    public function destroy($discount_id)
    {
        $discount = Discount::where('discount_id', '=', (int)$discount_id)->first();
        if (!$discount) {
            return response(['error' => 'Discount not found']);
        }
        $discount->delete();
        return response()->json(['success' => 'Discount deleted']);
    }
}