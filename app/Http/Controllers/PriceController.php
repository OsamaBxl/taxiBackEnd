<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Price;
use App\traits\ApiResponse;

use App\Http\Requests\booking\GetPrice;

class PriceController extends Controller
{
    use ApiResponse;
    public function seedData(Request $request)
    {
        $locations = Price::where(['pick_from' => $request->pick_from, 'pick_to' => $request->pick_to])->get('id');
        if (count($locations) > 0) {
            $this->apiResponse("error", 'locations already entered', 402);
        }
        $price = Price::create([
            'pick_from' => $request->pick_from,
            'pick_to' => $request->pick_to,
            'price' => $request->price,
        ]);
        if ($price) {
            $this->apiResponse("Success", 'Price Entered successfully', 201);
        } else {
            $this->apiResponse("error", 'DB Error', 503);
        }
    }

    public function getPrice(GetPrice $request)
    {
        // echo"test";exit;
        $locations = Price::where(['pick_from' => $request->pick_from, 'pick_to' => $request->pick_to])->get(['id', 'pick_from', 'pick_to', 'price']);
        if (count($locations) == 0) {
            $this->apiResponse("error", 'locations Not Found', 402);
        } else {
            $this->apiResponse("success", 'Location Price Returned successfully', 201, $locations);
        }
    }
}
