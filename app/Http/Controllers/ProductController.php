<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function purchase(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_TEST_SECRET_KEY'));

        $token = $request->stripeToken;

        $charge = Charge::create([
            'amount' => 100, //課金額を指定
            'currency' => 'jpy', //通貨を指定
            'source' => $token, //公開鍵を指定
            'description' => 'Example charge' //課金内容についての説明
        ]);

        return back();
    }
}
