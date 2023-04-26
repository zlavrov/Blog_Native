<?php

namespace App\Controller;

use App\Service\Attribute\Route;

class CommentController {

    #[Route(url: '/add/comment/blog')]
    public function createCommentBlog() {
        // create comment blog
    }

    #[Route(url: '/edit/comment/blog/{id}')]
    public function editCommentBlog($id) {
        // update comment blog
    }

    #[Route(url: '/get/comment/blog/{id}')]
    public function getCommentBlog($id) {
        // get comment blog
    }

    #[Route(url: '/del/comment/blog/{id}')]
    public function delCommentBlog($id) {
        // delete comment blog
    }

    #[Route(url: '/list/comment/blog')]
    public function listCommentBlog() {
        // list comment blog
    }

    /////////////////////////////////////

    #[Route(url: '/add/comment/article')]
    public function createCommentArticle() {
        // create comment article
    }

    #[Route(url: '/edit/comment/article/{id}')]
    public function editCommentArticle($id) {
        // update comment article
    }

    #[Route(url: '/get/comment/article/{id}')]
    public function getCommentArticle($id) {
        // get comment article
    }

    #[Route(url: '/del/comment/article/{id}')]
    public function delCommentArticle($id) {
        // delete comment article
    }

    #[Route(url: '/list/comment/article')]
    public function listCommentArticle() {
        // list comment article
    }
}
