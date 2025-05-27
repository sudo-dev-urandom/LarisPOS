<?php

if (!function_exists('format_currency')) {
    function format_currency($amount) {
        $symbol = config('currency.currency_symbol', 'Rp');
        $formatted = number_format($amount, 2, 
            config('currency.decimal_separator', ','), 
            config('currency.thousands_separator', '.')
        );
        
        return $symbol . ' ' . $formatted;
    }
}