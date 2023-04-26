<?php

namespace App\Controller;

use App\Model\DBActionModel;
use App\Service\Attribute\Route;

class AuthController {

    #[Route(url: '/auth/login')]
    public function login() {
        
        $result = (new DBActionModel())->SelectUserFromDataBase($_POST["username"], $_POST["password"]);

        $data = $result->fetch();
        if(password_verify($_POST["password"], $data["password"])) {
            $_SESSION["user"] = ["id" => $data["id"], "username" => $data["username"], "role" => $data["role"]];
            header("Location: /");
        } else {
            header("Location: /login");
        }
    }

    #[Route(url: '/auth/register')]
    public function register() {

        $result = (new DBActionModel())->SaveNewUserToDataBase($_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));

        if($result) {
            header("Location: /login");
        } else {
            header("Location: /register");
        }
    }

    #[Route(url: '/logout')]
    public function logout() {

        unset($_SESSION["user"]);
        header("Location: /login");
    }
}
