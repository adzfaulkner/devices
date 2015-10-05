<?php
namespace Arjf\Devices;
use Arjf\Devices\AbstractScreen;

abstract class AbstractHandheld {
    /**
     *
     * @var \Arjf\Devices\AbstractScreen
     */
    protected $screen;
    
    /**
     *
     * @var string
     */
    protected $colour;
    
    /**
     * 
     * @param AbstractScreen $screen
     * @param colour $colour
    */
    public function __construct(AbstractScreen $screen, $colour) {
        $this->setScreen($screen);
        $this->setColour($colour);
    }
    
    /**
     * 
     * @return \Arjf\Devices\AbstractScreen
     */
    public function getScreen() {
        return $this->screen;
    }
    
    /**
     * 
     * @param \Arjf\Devices\AbstractScreen $screen
     */
    public function setScreen(AbstractScreen $screen) {
        $this->screen = $screen;
    }
    
     /**
     * 
     * @return string
     */
    public function getColour() {
        return $this->colour;
    }
    
    /**
     * 
     * @param string $colour
     */
    public function setColour($colour) {
        $this->colour = $colour;
    }
}

