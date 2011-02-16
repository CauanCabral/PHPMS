<?php

require_once 'PHPUnit/Framework.php';

class testFunciona extends PHPUnit_Framework_TestCase {

    function testPush() {
        $this->assertEquals(1, 1, 'Deve ser 1!');
    }

}

?>