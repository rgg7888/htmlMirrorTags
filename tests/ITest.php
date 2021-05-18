<?php

use PHPUnit\Framework\TestCase;
use App\tags\mirrorI\I;

class ITest extends TestCase {

    public function test_i_tag () {

        $i = new I("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<i class=\"#\">hello</i>", $i->add());

    }

}