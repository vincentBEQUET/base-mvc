<?php
use Symfony\Component\VarDumper\VarDumper;

// PagesController.php

class PagesController {

    public function home() {
        view('pages.home');
    }

    public function about() {
        view('pages.about');
    }

    public function contact() {
        view('pages.contact');
    }

    public function traitementForm() {
        dump($_POST);
    }

    public function ajoutArticle() {
        view('pages.ajout-article');

    }

    public function AjoutArticle2() {
        dump($_POST);
    }

}