<?php

require_once __DIR__ . '/../../Database/Database.php';
class User
{

    private string $first_name;
    private string $last_name;
    private string $email;
    private string $password;
    private string $role;
    
 

    public function __construct($first_name, $last_name, $email, $password, $role)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;

        
    }

    public function getFirstName(): string{ return $this->first_name;}

    public function getLastName(): string{return $this->last_name;}

    public function getEmail(): string{return $this->email;}

    public function getPassword(): string{return $this->password;}

    public function getRole(): string{return $this->role;}

    public function getFullName(): string{return $this->first_name . $this->last_name;}


    public function setFirstName($first_name){$this->first_name = $first_name;}
    public function setLastName($last_name){$this->last_name = $last_name;}
    public function setEmail($email){$this->email = $email;}
    public function setpassword($password){$this->password = $password;}
    public function setConfirmPassword($role){$this->role = $role;}
    

}
