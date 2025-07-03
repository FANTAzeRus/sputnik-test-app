<?php

namespace App;

enum CurrencyEnum: string
{
		case RUB = 'RUB';
    case USD = 'USD';
    case EUR = 'EUR';

	public function is(self $currency): bool
	{
			return $this === $currency;
	}
}
