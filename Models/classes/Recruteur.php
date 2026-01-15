<?php

require_once __DIR__ . '/../classes/User.php';

class Recruteur extends User
{

    public function __construct($first_name, $last_name, $email, $passowrd, $confirm_password, $role)
    {
        parent::__construct($first_name, $last_name, $email, $passowrd, $confirm_password, $role);
    }
}