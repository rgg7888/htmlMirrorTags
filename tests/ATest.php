<?php

use PHPUnit\Framework\TestCase;
use App\tags\mirrorA\A;

class ATest extends TestCase {

    public function test_a_tag () {

        $a = new A("hello",[
            'href' => '#'
        ]);

        $this->assertEquals("<a href=\"#\">hello</a>", $a->add());

    }

}