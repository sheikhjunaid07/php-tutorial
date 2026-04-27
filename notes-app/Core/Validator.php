<?php

namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}


// filter_var($value, FILTER_VALIDATE_EMAIL); --> check your email format is valid or not
// fhlasduifshadifha  --> invalid email
// abc@gmail.com, abc@test.com  --> valid email 