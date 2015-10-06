<?php
use Arjf\Devices\Handheld\Apple\Screen;
use Arjf\Devices\Handheld\Apple\Iphone;

class IphoneSixTest extends PHPUnit_Framework_TestCase {
    public function testGetScreen()
    {
        $screen = new Screen(320, 480, true);
        $iphone = new Iphone\Six($screen);
        
        $this->assertInstanceOf('Arjf\Devices\Handheld\Apple\Screen', $iphone->getScreen());
    }
    
    public function testGetColour()
    {
        $screen = new Screen(320, 480, true);
        $iphone = new Iphone\Six($screen);
        
        $this->assertEquals(Iphone\Six::DEFAULT_COLOUR, $iphone->getColour());
    }
    
    public function testSetColour()
    {
        $screen = new Screen(320, 480, true);
        $iphone = new Iphone\Six($screen);
        
        $this->assertEquals(Iphone\Six::DEFAULT_COLOUR, $iphone->getColour());
        
        $iphone->setColour('white');
        
        $this->assertEquals('white', $iphone->getColour());
    }
}


