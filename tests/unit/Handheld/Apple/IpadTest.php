<?php
use Arjf\Devices\Handheld\Apple\Screen;
use Arjf\Devices\Handheld\Apple\Ipad;

class IpadTest extends PHPUnit_Framework_TestCase {
    public function testGetScreen()
    {
        $screen = new Screen(2048, 1536, true);
        $ipad = new Ipad($screen);
        
        $this->assertInstanceOf('Arjf\Devices\Handheld\Apple\Screen', $ipad->getScreen());
    }
    
    public function testGetColour()
    {
        $screen = new Screen(2048, 1536, true);
        $ipad = new Ipad($screen);
        
        $this->assertEquals(Ipad::DEFAULT_COLOUR, $ipad->getColour());
    }
    
    public function testSetColour()
    {
        $screen = new Screen(2048, 1536, true);
        $ipad = new Ipad($screen);
        
        $this->assertEquals(Ipad::DEFAULT_COLOUR, $ipad->getColour());
        
        $ipad->setColour('white');
        
        $this->assertEquals('white', $ipad->getColour());
    }
}


