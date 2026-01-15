<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../Models/repositories/UserRepo.php';
require_once __DIR__ . '/../Models/classes/User.php';
class RegisterController
{


    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (
                empty($_POST['first_name']) ||
                empty($_POST['last_name']) ||
                empty($_POST['email']) ||
                empty($_POST['password']) ||
                empty($_POST['confirm_password']) ||
                empty($_POST['role'])
            ) {
                die("All fields is required");
            }
            $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) die("Invalid email");
            if ($_POST['password'] !==  $_POST['confirm_password']) die("passwords not matches");

            $userRepo = new UserRepo();

            $user = new User(
                $_POST['first_name'],
                $_POST['last_name'],
                $_POST['email'],
                $hashed_password,
                $_POST['role']
            );




            if ($userRepo->insertUser($user)) {
                require __DIR__ . '/../views/login.php';
            } else {
                echo "register failed";
            }
        }
    }
}

$r = new RegisterController();
$r->register();
