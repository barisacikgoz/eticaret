<?php

namespace App\Http\Middleware;

use App\Models\Basket;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class Front
{
    public function handle(Request $request, Closure $next)
    {
        $baskets = Basket::where("customer_id", auth()->guard("customer")->id())->get();

        $basketTotals["subTotal"] = $baskets->sum(function ($item) {
            return $item->product->product_price * $item->quantity;
        });
        $basketTotals["tax"] = $basketTotals['subTotal'] * 0.18;
        $basketTotals["total"] = $basketTotals['subTotal'] * 1.18;
        View::share('baskets', $baskets);
        View::share('basketTotals', $basketTotals);

        return $next($request);
    }
}
