<?php
use Arjf\Devices\Handheld\Apple\Screen;

class ScreenTest extends PHPUnit_Framework_TestCase {
    public function testRetinaScreen()
    {
        $screen = new Screen(320, 480, true);
        $this->assertEquals(320, $screen->getWidth());
        $this->assertEquals(480, $screen->getHeight());
        $this->assertTrue($screen->isRetina());
    }
    
    public function testNotRetinaScreen()
    {
        $screen = new Screen(320, 480, false);
        $this->assertEquals(320, $screen->getWidth());
        $this->assertEquals(480, $screen->getHeight());
        $this->assertFalse($screen->isRetina());
    }
    
    public function testDefaultScreen()
    {
        $screen = new Screen(320, 480);
        $this->assertEquals(320, $screen->getWidth());
        $this->assertEquals(480, $screen->getHeight());
        $this->assertTrue($screen->isRetina());
    }
}


