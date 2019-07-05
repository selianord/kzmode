<?php

namespace Group\Assets;
interface IAcquisitions
{
    public static function statements() : int;
    public static function payments() : int;
    public static function bankingProfile() : int;
    public static function notifications() : int;
    public static function loanAcquisition() : int;
    public static function creditScore () : int;
}

?>
