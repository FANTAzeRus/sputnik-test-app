<?php

namespace App;

use NumberFormatter;

class Helper
{
	public static function getProducts()
	{
		return [
			[
				"id" => 1,
				"title" => "iPhone 16",
				"price" => 80000,
			],
			[
				"id" => 2,
				"title" => "PowerBank 3000mAh",
				"price" => 2950,
			],
			[
				"id" => 4,
				"title" => "Палатка туристическая 7-местная Арктика 359",
				"price" => 9312,
			],
			[
				"id" => 5,
				"title" => "Ароматизатор подвес гелевый (AREON LIQUID LUX) Золото",
				"price" => 466,
			],
		];
	}

	static $options = [
		CurrencyEnum::RUB->value => [
			"locale" => "ru_RU",
			"convert" => 1
		],
		CurrencyEnum::USD->value => [
			"locale" => "en_EN",
			"convert" => 90
		],
		CurrencyEnum::EUR->value => [
			"locale" => "en_EN",
			"convert" => 100
		],
	];

	public static function prepareData($list, string $currency)
	{
		$data = array_map(function ($item) use ($currency) {
			$item['price'] = self::convertCurrency($item['price'], $currency);

			return $item;
		}, $list);

		return collect(
			$data
		);
	}

	public static function convertCurrency(int $value, string $currency)
	{
		$currencyOptions = static::$options[$currency];

		$formatter = new NumberFormatter($currencyOptions['locale'], NumberFormatter::CURRENCY);

		if ($currency === CurrencyEnum::RUB->value) {
			return number_format($value, 0, '.', ' ') . ' ₽';
		}

		return $formatter->formatCurrency($value / $currencyOptions['convert'], $currency);
	}
}