<?php
 
use Norberts\Nacho\Nacho;
 
class NachoTest extends PHPUnit_Framework_TestCase {
 
  public function testNachHasCheese()
  {
    $nacho = new Nacho;
    $this->assertTrue($nacho->hasCheese());
  }
 
}