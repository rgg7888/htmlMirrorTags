<?php

if(!function_exists('_nav')) {
    function _nav(array $atributos = [],$content = null) {
        $nav = new App\tags\mirrorNav\Nav($content,$atributos);
        return $nav->add();
    }
}

if(!function_exists('_div')) {
    function _div(array $atributos = [],$content = null) {
        $div = new App\tags\div\Div($content,$atributos);
        return $div->add();
    }
}

if(!function_exists('_a')) {
    function _a(array $atributos = [],$content = null) {
        $a = new App\tags\a\A($content,$atributos);
        return $a->add();
    }
}

if(!function_exists('_ul')) {
    function _ul(array $atributos = [],$content = null) {
        $ul = new App\tags\ul\Ul($content,$atributos);
        return $ul->add();
    }
}

if(!function_exists('_li')) {
    function _li(array $atributos = [],$content = null) {
        $li = new App\tags\li\Li($content,$atributos);
        return $li->add();
    }
}