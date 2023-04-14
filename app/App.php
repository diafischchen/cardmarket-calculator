<?php

class App {

    public function start() {

        $view = new View;
        
        $view
            ->render('header')
            ->render('navbar')
            ->render('addcards')
            ->render('mycards')
            ->render('footer');

    }

}