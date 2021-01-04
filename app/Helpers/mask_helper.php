<?php
/**
 * Clean masks with especial chars
 */
function clean_mask($value)
{
    return trim(preg_replace('/[^0-9]+/', '', $value));
}

