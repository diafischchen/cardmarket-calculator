<?php

class App {

    private Storage $storage;
    private Cardmarket $cardmarket;

    function __construct() {
        $this->storage = new Storage;
        $this->cardmarket = new Cardmarket;
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

    public function addCard() {

        $savedata = $this->storage->getCurrentSave();

        if (!isset($_GET['cardlink'])) {
            return;
        }

        $cardlink = $_GET['cardlink'];
        $carddata = $this->cardmarket->getData($cardlink);

    }

    public function removeCard() {

        $savedata = $this->storage->getCurrentSave();

        if (!isset($_GET['cardid'])) {
            return;
        }

    }

}