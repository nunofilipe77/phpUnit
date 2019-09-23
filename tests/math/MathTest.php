<?php
namespace someApp\math;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase{

private $mathObject;

protected function setUp():void{
    $this->mathObject = new MathCalculator();
}


public function testCenas(){
    $num = 1;
    $this->assertTrue($num == 1);
}

public function testConvertDecimalToBin(){
    $convert = 21;
    $convert = $this->mathObject->convertDecimalToBin($convert);

    $this->assertEquals($convert,'10101');

}

/**
* @dataProvider provideMockNumbers
 */
 public function testConvertDecimalToBinary($number, $expected): void
 {
    $this->assertEquals($expected, $this->mathObject->convertDecimalToBin($number));
 }

public function provideMockNumbers():array
{
     return [
        ['220', '11011100'],
        ['10', '1010'],
        ['1245', '10011011101'],
        ['245435','111011111010111011']
    ];
}



}

