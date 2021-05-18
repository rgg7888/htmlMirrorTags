<?php

use PHPUnit\Framework\TestCase;
use App\tags\mirrorUl\Ul;

class UlTest extends TestCase {

    public function test_ul_tag () {

        $ul = new Ul("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<ul class=\"#\">hello</ul>", $ul->add());

    }

}