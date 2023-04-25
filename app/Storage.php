<?php

class Storage {

    private Cookie $cookie;

    function __construct() {
        $this->cookie = new Cookie;
    }

    public function getCurrentSave(): string | null {
        return $this->cookie->getCookie('savedata');
    }

    public function setCurrentSave() {
        
    }

}