<?php

namespace App\Controller;

use App\Service\Attribute\Route;

class BlogController {

    #[Route(url: '/add/blog')]
    public function createBlog() {
        // create blog
    }

    #[Route(url: '/edit/blog/{id}')]
    public function editBlog($id) {
        // update blog
    }

    #[Route(url: '/get/blog/{id}')]
    public function getBlog($id) {
        // get blog
    }

    #[Route(url: '/del/blog/{id}')]
    public function delBlog($id) {
        // delete blog
    }

    #[Route(url: '/list/blog')]
    public function listBlog() {
        // list blog
    }
}
