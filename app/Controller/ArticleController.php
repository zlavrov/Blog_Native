<?php

namespace App\Controller;

use App\Service\Attribute\Route;

class ArticleController {

    #[Route(url: '/add/article')]
    public function createArticle() {
        // create article
    }

    #[Route(url: '/edit/article/{id}')]
    public function editArticle($id) {
        // update article
    }

    #[Route(url: '/get/article/{id}')]
    public function getArticle($id) {
        // get article
    }

    #[Route(url: '/del/article/{id}')]
    public function delArticle($id) {
        // delete article
    }

    #[Route(url: '/list/article')]
    public function listArticle() {
        // list article
    }
}
