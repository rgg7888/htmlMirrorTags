<?php

if(!function_exists('nav')) {
    function nav(array $atributos = [],$content = null) {
        $nav = new App\tags\nav\Nav($content,$atributos);
        return $nav->add();
    }
}