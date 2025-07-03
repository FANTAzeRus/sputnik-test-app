<?php

namespace App\Actions;

use App\Helper;
use App\Http\Resources\PricesResource;

class ProductsList
{
	public static function get(string $currency)
	{
		$data = Helper::prepareData(
			Helper::getProducts(),
			$currency
		);

		return PricesResource::collection($data);
	}
}