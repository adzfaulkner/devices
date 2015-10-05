<?php
namespace Arjf\Devices\Handheld;
use \Arjf\Devices\AbstractHandheld;

class AbstractAppleHandheld extends AbstractHandheld {
    const DEFAULT_COLOUR = 'black';
    
    public function __construct(\Arjf\Devices\AbstractScreen $screen, $colour = self::DEFAULT_COLOUR) {
        parent::__construct($screen, $colour);
    }
}
