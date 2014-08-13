<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Acme\DemoBundle\Utility;

use Acme\DemoBundle\Utility\Calculator;
/**
 * Description of CalculatorTest
 *
 * @author darek
 */
class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    //put your code here
    public function testAdd(){
        $calc = new Calculator();
        $result  = $calc->add(5, 6);
        $this->assertEquals(11, $result);
    }
}
