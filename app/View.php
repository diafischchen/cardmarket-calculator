<?php

class View {

    public function render(String $__path, Array $__data = array()): View {

        foreach ($__data as $__key => $__value) {
            $$__key = $__value;
        }

        require ABSPATH . '/view/' . $__path . '.php';

        return $this;

    }

    public function renderMyCards(array | null $savedata = []) {

        if (empty($savedata['cards']) || $savedata === null) {
            return $this;
        }

        return $this->render('mycards');
    }

    public function renderResults(array | null $savedata = []) {

        if (empty($savedata['cards']) || $savedata === null) {
            return $this;
        }

        return $this->render('results');

    }

}