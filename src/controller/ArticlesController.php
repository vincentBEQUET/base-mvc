<?php
use Symfony\Component\VarDumper\VarDumper;

// ArticlesController.php

class ArticlesController
{
    public function ajoutArticle()
    {
        view('pages.ajout-article');
    }

    public function AjoutArticle2()
    {
        dump($_POST);
    }
}
