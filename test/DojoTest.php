<?php
require __DIR__ . "/../src/Dojo.php";
use App\Dojo;
use PHPUnit\Framework\TestCase;
class DojoTest extends TestCase
{
  public function testFizzbuzz()
  {
    $d = new Dojo();
    $this->assertEquals("fizzbuzz",$d->fizzbuzz(15));
    $this->assertEquals("buzz",$d->fizzbuzz(10));
    $this->assertEquals("fizz",$d->fizzbuzz(6));
    $this->assertEquals("1",$d->fizzbuzz(1));

  }
}