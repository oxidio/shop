<?php
/**
 * Price enter mode: neto
 * Price view mode:  brutto
 * Product count: count of used products
 * VAT info: 17%
 * Currency rate: 1.0
 * Discounts: -;
 * Vouchers: -;
 * Wrapping: -;
 * Gift cart: -;
 * Costs VAT caclulation rule: max
 * Costs:
 *  1. Payment -
 *  2. Delivery  -
 *  3. TS -
 * Actions with basket or order:
 *   change config
 * Short description: From articlePrice.csv: article final price calculations. 9200 - 1st
 */

$aData = array(
    'articles' => array(
        0 => array(
                'oxid'                     => 9200,
                'oxprice'                  => 74.36,
                'oxvat'                    => 17,
                'amount'                   => 1,
        ),
    ),
    'expected' => array(
        'articles' => array(
                 9200 => array( '87,00', '87,00' ),
        ),
        'totals' => array(
                'totalBrutto' => '87,00',
                'totalNetto'  => '74,36',
                'vats' => array(
                        17 => '12,64',
                ),
                'grandTotal'  => '87,00'
        ),
    ),
    'options' => array(
        'config' => array(
                'blEnterNetPrice' => true,
                'blShowNetPrice' => false
        ),
        'activeCurrencyRate' => 1,
    ),
);
