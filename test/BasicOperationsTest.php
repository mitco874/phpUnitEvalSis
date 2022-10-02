<?php

use PHPUnit\Framework\TestCase;

    class BasicOperationsTest extends TestCase{
        private $calc;
        
        public function setUp():void{
            $this->calc=new Calculadora();
        }

        public function testSumWithTwoNumbers(){
            $this->assertEquals(63,$this->calc->sum(50,13));
        }

        public function testSumWithTwoFloats(){
            
        }
        public function testSumWithTwoNegativeNumbers(){
            
        }

        public function testSumWithTwoChars(){
            
        }

        public function testSumWithTwoNull(){
            
        }

        public function testDivideBetweenZero(){


        }





    }




?>