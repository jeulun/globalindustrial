<?php

namespace App\Http\Controllers;

use Auth;
use App\Coupon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CouponsController extends Controller
{



    public function store(Request $request)
    {
        $userEmail = Auth::user()->email; //logged in user email
        $coupon = Coupon::where('code', $request->coupon_code)->where('beneficiary',$userEmail)->first();  
       //$coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            return redirect()->route('checkout.index')->withErrors('Invalid coupon code. Please try again.');
        }

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
            'discountrate' => $coupon->showdiscount(),
            'beneficiary' => $coupon->beneficiary,
        ]);

        return redirect()->route('checkout.index')->with('success_message', 'Coupon has been applied!');
    }




    public function destroy()
    {
        session()->forget('coupon');

        return redirect()->route('checkout.index')->with('success_message', 'Coupon has been removed.');
    }
}
