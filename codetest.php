<?php
class FooTest extends PHPUnit_Framework_TestCase
{
    public function test1()
    {
       $this->assertEquals(1, 1); 
    }
    
    public function test2()
    {
       $this->assertEquals(1, 1); 
       $this->assertEquals(1, 1); 
    }
    
}
