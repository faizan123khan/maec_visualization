<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('isAssoc'))
{
    function isAssoc(array $arr)
    {
        if (array() === $arr) return false;
        return array_keys($arr) !== range(0, count($arr) - 1);
    } //isAssoc
}
