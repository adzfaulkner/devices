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
     * @var int
     */
    protected $capacity;
    
    /**
     * 
     * @param AbstractScreen $screen
     * @param colour $colour
     * @param capacity $capacity
    */
    public function __construct(AbstractScreen $screen, $colour, $capacity) {
        $this->setScreen($screen);
        $this->setColour($colour);
        $this->setCapacity($capacity);
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
    
    /**
     * 
     * @return int
     */
    public function getCapacity() {
        return (int)$this->capacity;
    }
    
    /**
     * 
     * @param sint $capacity
     */
    public function setCapacity($capacity) {
        $this->capacity = (int)$capacity;
    }
}

