<?php

namespace App\Http\Controllers;

use App\Actions\ProductsList;
use App\CurrencyEnum;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    public function __invoke(Request $request)
    {
			if(!isset($request->currency) || (isset($request->currency) && CurrencyEnum::tryFrom($request->currency))) {
				$currency = $request->currency ?? CurrencyEnum::RUB->value;

				return ProductsList::get($currency);
			}

			return response()->json([
				'success' => false,
				'message' => trans('Указана недопустимая валюта.')
			], 400);

    }
}
