<?php namespace css\fonts\controllers;

class Main extends \Controller
{
    public function load()
    {
        $fonts = l2a($this->data('fonts'));

        foreach ($fonts as $font) {
            $this->css($font);
        }
    }
}
