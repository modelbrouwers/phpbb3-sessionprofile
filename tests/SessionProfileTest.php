<?php

use Modelbrouwers\SessionProfile\SessionProfile;

class SessionProfileTest extends PHPUnit_Framework_TestCase {

  public function testFoo()
  {
    $sessionProfile = new SessionProfile();
    $this->assertTrue($sessionProfile !== null);
  }

}
