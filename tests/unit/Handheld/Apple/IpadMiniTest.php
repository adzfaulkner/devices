<?php
use Arjf\Devices\Handheld\Apple\Screen;
use Arjf\Devices\Handheld\Apple\Ipad;

class IpadMiniTest extends PHPUnit_Framework_TestCase {
    public function testGetScreen()
    {
        $screen = new Screen(2048, 1536, true);
        $ipad = new Ipad\Mini($screen);
        
        $this->assertInstanceOf('Arjf\Devices\Handheld\Apple\Screen', $ipad->getScreen());
    }
    
    public function testGetColour()
    {
        $screen = new Screen(2048, 1536, true);
        $ipad = new Ipad\Mini($screen);
        
        $this->assertEquals(Ipad\Mini::DEFAULT_COLOUR, $ipad->getColour());
    }
    
    public function testSetColour()
    {
        $screen = new Screen(2048, 1536, true);
        $ipad = new Ipad\Mini($screen);
        
        $this->assertEquals(Ipad\Mini::DEFAULT_COLOUR, $ipad->getColour());
        
        $ipad->setColour('white');
        
        $this->assertEquals('white', $ipad->getColour());
    }
    
    public function testSetPrice()
    {
        $screen = new Screen(2048, 1536, true);
        $ipad = new Ipad\Mini($screen);
        
        $this->assertEquals(Ipad\Mini::DEFAULT_PRICE, $ipad->getPrice());
        
        $ipad->setPrice(160.00);
        
        $this->assertEquals(160.00, $ipad->getPrice());
    }
}


