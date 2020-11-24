<?php
namespace SMSC;

class SMSCCodeInPhone extends SMSCRequest
{

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
}