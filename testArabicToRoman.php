<?php

require_once 'PHPUnit/Framework.php';
require_once 'arabicToRoman.php';

class testArabicToRoman extends PHPUnit_Framework_TestCase {

    public function testUm() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumberOne = $this->arabicToRoman->convert(1);
        $this->assertEquals($convertNumberOne, 'I', 'Deve retornar I');
    }

    public function testDois() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(2);
        $this->assertEquals($convertNumber, 'II', 'Deve retornar II');
    }

    public function testNove() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(9);
        $this->assertEquals($convertNumber, 'IX', 'Deve retornar IX');
    }

    public function testDez() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(10);
        $this->assertEquals($convertNumber, 'X', 'Deve retornar X');
    }

    public function testNoventa() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(90);
        $this->assertEquals($convertNumber, 'XC', 'Deve retornar XC');
    }

    public function testOitentaETres() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(83);
        $this->assertEquals($convertNumber, 'LXXXIII', 'Deve retornar LXXXIII');
    }

    public function testDuzentos() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(200);
        $this->assertEquals($convertNumber, 'CC', 'Deve retornar CC');
    }

    public function testTrezentoQuatro() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(304);
        $this->assertEquals($convertNumber, 'CCCIV', 'Deve retornar CCCIV');
    }

    public function testCapeta() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(666);
        $this->assertEquals($convertNumber, 'DCLXVI', 'Deve retornar DCLXVI');
    }

    public function testTresMilNovecentosEnoventaEnove() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(3999);
        $this->assertEquals($convertNumber, 'MMMCMXCIX', 'Deve retornar MMMCMXCIX');
    }

    public function testMorreDiabo() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(0);
        $this->assertEquals($convertNumber, 'Morre Diabo!', 'Deve retornar Morre Diabo');
    }

    public function testTambemMorreDiabo() {
        $this->arabicToRoman = new arabicToRoman();
        $convertNumber = $this->arabicToRoman->convert(4000);
        $this->assertEquals($convertNumber, 'Morre Diabo!', 'Deve retornar Morre Diabo');
    }

}

?>