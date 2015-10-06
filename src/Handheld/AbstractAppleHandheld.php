<?php
namespace Arjf\Devices\Handheld;
use Arjf\Devices\AbstractHandheld;
use Arjf\Devices\AbstractScreen;

class AbstractAppleHandheld extends AbstractHandheld {
    const DEFAULT_COLOUR = 'black';
    const DEFAULT_CAPACITY = 16;
    
    public function __construct(
        AbstractScreen $screen, 
        $colour = self::DEFAULT_COLOUR,
        $capacity = self::DEFAULT_CAPACITY
    ) {
        parent::__construct($screen, $colour, $capacity);
    }
}
