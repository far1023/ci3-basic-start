<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('randstr'))
{
    function randstr($length)
    {
        $keys = array_merge(range(0,9), range('a', 'z'));

        $key = "";
        for($i=0; $i < $length; $i++) {
            $key .= $keys[mt_rand(0, count($keys) - 1)];
        }
        return $key;
    }
}