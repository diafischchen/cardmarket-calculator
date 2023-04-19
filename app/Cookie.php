<?php

class Cookie {

    // 3 years
    private $saveTime = 94608000;

    public function getCookie(string $cookieKey): string | null {

        if (isset($_COOKIE[$cookieKey])) {
            return $_COOKIE[$cookieKey];
        } else {
            return null;
        }

    }

    public function setCookie(string $cookieKey, string $cookieValue): void {

        setcookie($cookieKey, $cookieValue, time() + $this->saveTime, '/', '', true);

    }

}