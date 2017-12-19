<?php

use Carbon\Carbon;

/**
* change plain number to formatted currency
*
* @param $number
* @param $currency
*/

function formatNumber($number, $currency = 'IDR')
{
   if($currency == 'USD') {
        return number_format($number, 2, '.', ',');
   }
   return number_format($number, 0, '.', '.');
}

function tglIndo($tgl)
{
    $tgl = new Carbon($tgl);
    setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US');
    return $tgl->formatLocalized('%d %B %Y');
}
