<?php

namespace App\Controller;

use App\Service\Attribute\Route;

class UserController {

    #[Route(url: '/add/user')]
    public function createUser() {
        // create user
    }

    #[Route(url: '/edit/user/{id}')]
    public function editUser($id) {
        // update user
    }

    #[Route(url: '/get/user/{id}')]
    public function getUser($id) {
        // get user
    }

    #[Route(url: '/del/user/{id}')]
    public function delUser($id) {
        // delete user
    }

    #[Route(url: '/list/user')]
    public function listUser() {
        // list user
    }
}
