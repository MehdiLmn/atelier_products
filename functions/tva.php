<?php
/**
 * Undocumented function
 *
 * @param float $price
 * @param float $tva (=1.2)
 * @return float
 */
function getTotalPrice(float $price, float $tva): float
{
    return $price * $tva;
}