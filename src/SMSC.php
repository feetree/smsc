<?php

namespace SMSC;

class SMSC
{

    static function codeInPhone(string $login, string $password): SMSCCodeInPhone
    {
        return new SMSCCodeInPhone($login, $password);
    }
}