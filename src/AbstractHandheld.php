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
     * @var float
     */
    protected $price;
    
    /**
     * 
     * @param AbstractScreen $screen
     * @param colour $colour
     * @param capacity $capacity
    */
    public function __construct(
        AbstractScreen $screen, 
        $colour, 
        $capacity, 
        $price
    ) {
        $this->setScreen($screen);
        $this->setColour($colour);
        $this->setCapacity($capacity);
        $this->setPrice($price);
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
    
    /**
     * 
     * @return float
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * 
     * @param float $price
     */
    public function setPrice($price) {
        if (is_numeric($price) === false) {
            throw new \InvalidArgumentException($price . ' is not a valid price');
        }
        
        $this->price = (float)$price;
    }
}

