<?php

namespace App\Controller;

use App\Service\Attribute\Route;
use App\Service\Page\PageService;

class PageController {

    #[Route(url: '/')]
    public function getHome() {

        (new PageService())->getPage('home', ["title" => " | Home"]);
        // page home
    }

    #[Route(url: '/blog')]
    public function getBlog() {

        (new PageService())->getPage('blog', ["title" => " | Blog"]);
        // page blog
    }

    #[Route(url: '/article')]
    public function getArticle() {
        
        (new PageService())->getPage('article', ["title" => " | Article"]);
        // page article
    }

    #[Route(url: '/about')]
    public function getAbout() {
        
        (new PageService())->getPage('about', ["title" => " | About"]);
        // page about
    }

    #[Route(url: '/contact')]
    public function getContact() {
        
        (new PageService())->getPage('contact', ["title" => " | Contact"]);
        // page contact
    }

    #[Route(url: '/login')]
    public function getLogin() {

        (new PageService())->getPage('auth', ["title" => " | Login", "header" => "Login", "url" => "/auth/login"]);
        // page login
    }

    #[Route(url: '/register')]
    public function getRegister() {

        (new PageService())->getPage('auth', ["title" => " | Register", "header" => "Register", "url" => "/auth/register"]);
        // page register
    }
}
