<?php
class User extends Guest
{
    public $password;
    public $sconto = 20;

    public function __construct($name, $email, $address, $password)
    {
        parent::__construct($name, $email, $address);
        $this->password = $password;
    }
}
