<?php

use PHPUnit\Framework\TestCase;
use App\tags\mirrorSection\Section;

class SectionTest extends TestCase {

    public function test_section_tag () {

        $section = new Section("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<section class=\"#\">hello</section>", $section->add());

    }

}