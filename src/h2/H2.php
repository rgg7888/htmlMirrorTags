<?php

namespace App\tags\mirrorH2;

use App\ha\HtmlArmor;

class H2 extends HtmlArmor {

    private array $atributos;
    private $content;

    public function __construct($content , array $atributos) {
        $this->atributos = $atributos;
        $this->content = $content;
    }

    public function Atributos() {
        return $this->atributos;
    }

    public function Contenido() {
        return $this->content;
    }

    public function add () {
        $this->setType("normal");
        $this->setTag("h2");
        $this->setAtributos($this->Atributos());
        $this->setContenido($this->Contenido());
        return $this->build();
    }

}