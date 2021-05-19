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

if(!function_exists('_h1')) {
    function _h1(array $atributos = [],$content = null) {
        $h1 = new App\tags\mirrorH1\H1($content,$atributos);
        return $h1->add();
    }
}

if(!function_exists('_h2')) {
    function _h2(array $atributos = [],$content = null) {
        $h2 = new App\tags\mirrorH2\H2($content,$atributos);
        return $h2->add();
    }
}

if(!function_exists('_h3')) {
    function _h3(array $atributos = [],$content = null) {
        $h3 = new App\tags\mirrorH3\H3($content,$atributos);
        return $h3->add();
    }
}

if(!function_exists('_h4')) {
    function _h4(array $atributos = [],$content = null) {
        $h4 = new App\tags\mirrorH4\H4($content,$atributos);
        return $h4->add();
    }
}

if(!function_exists('_h5')) {
    function _h5(array $atributos = [],$content = null) {
        $h5 = new App\tags\mirrorH5\H5($content,$atributos);
        return $h5->add();
    }
}

if(!function_exists('_h6')) {
    function _h6(array $atributos = [],$content = null) {
        $h6 = new App\tags\mirrorH6\H6($content,$atributos);
        return $h6->add();
    }
}