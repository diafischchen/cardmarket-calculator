<?php

class App {

    public function index() {

        $view = new View;
        
        $view
            ->render('header')
            ->render('navbar')
            ->render('addcards')
            ->render('mycards')
            ->render('results')
            ->render('footer');

    }

}