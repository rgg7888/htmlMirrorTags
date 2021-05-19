<?php

if(!function_exists('_nav')) {
    function _nav(array $atributos = [],$content = null) {
        $nav = new App\tags\mirrorNav\Nav($content,$atributos);
        return $nav->add();
    }
}

if(!function_exists('_div')) {
    function _div(array $atributos = [],$content = null) {
        $div = new App\tags\mirrorDiv\Div($content,$atributos);
        return $div->add();
    }
}

if(!function_exists('_a')) {
    function _a(array $atributos = [],$content = null) {
        $a = new App\tags\mirrorA\A($content,$atributos);
        return $a->add();
    }
}

if(!function_exists('_ul')) {
    function _ul(array $atributos = [],$content = null) {
        $ul = new App\tags\mirrorUl\Ul($content,$atributos);
        return $ul->add();
    }
}

if(!function_exists('_li')) {
    function _li(array $atributos = [],$content = null) {
        $li = new App\tags\mirrorLi\Li($content,$atributos);
        return $li->add();
    }
}

if(!function_exists('_i')) {
    function _i(array $atributos = [],$content = null) {
        $i = new App\tags\mirrorI\I($content,$atributos);
        return $i->add();
    }
}

if(!function_exists('_footer')) {
    function _footer(array $atributos = [],$content = null) {
        $footer = new App\tags\mirrorFooter\Footer($content,$atributos);
        return $footer->add();
    }
}

if(!function_exists('_section')) {
    function _section(array $atributos = [],$content = null) {
        $section = new App\tags\mirrorSection\Section($content,$atributos);
        return $section->add();
    }
}