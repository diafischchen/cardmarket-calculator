<?php

class App {

    private Storage $storage;

    function __construct() {
        $this->storage = new Storage;
    }

    public function index() {

        $savedata = $this->storage->getCurrentSave();

        $view = new View;
        
        $view
            ->render('header')
            ->render('navbar')
            ->render('addcards')
            ->renderMyCards($savedata)
            ->renderResults($savedata)
            ->render('footer');

    }

}