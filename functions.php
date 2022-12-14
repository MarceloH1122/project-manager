<?php
class My
{
    static function CheckDate($str)
    {
        $d = substr($str, 8, 2);
        $m = substr($str, 5, 2);
        $y = substr($str, 0, 4);

        if (!checkdate($m, $d, $y))
            return false;

        return DateTime::createFromFormat('d-m-Y G:i:s', "$d-$m-$y 00:00:00");
    }
}
